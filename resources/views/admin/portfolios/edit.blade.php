@extends('admin.layouts.main')


@section('content')

@if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>There were some problems with your input. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Portfolio</h3>
                        <a class="create__btn" href="{{ route('admin.portfolios.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Description Uz:</strong>
                        <input type="text" name="description_uz" value="{{ $portfolio->description_uz }}" class="form-control"> <br>
                        
                        <strong> Description Ru:</strong>
                        <input type="text" name="description_ru" value="{{ $portfolio->description_ru }}" class="form-control"> <br>
                        
                        <strong> Description En:</strong>
                        <input type="text" name="description_en" value="{{ $portfolio->description_en }}" class="form-control"> <br>
                        
                        {{-- <strong> Category :</strong>
                        <input type="text" name="category" value="{{ $portfolio->category }}" class="form-control"> <br> --}}

                        <img src="/img/{{$portfolio->img}}" width="70px"><br><br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <strong> URL :</strong>
                        <input type="text" name="url" value="{{ $portfolio->url }}" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
