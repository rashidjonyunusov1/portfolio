@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Portfolio</h3>
                        <a class="create__btn" href="{{ route('admin.portfolios.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Description :</strong>
                        <input type="text" name="description" value="{{ $portfolio->description }}" class="form-control"> <br>
                        
                        <strong> Category :</strong>
                        <input type="text" name="category" value="{{ $portfolio->category }}" class="form-control"> <br>

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
