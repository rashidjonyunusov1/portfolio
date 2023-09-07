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
                        <h3>Edit about</h3>
                        <a class="create__btn" href="{{ route('admin.abouts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> title :</strong>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control"> <br>

                        <strong> Description1 :</strong>
                        <input type="text" name="description1" value="{{ $about->description1 }}" class="form-control"> <br>

                        <strong> Description2 :</strong>
                        <input type="text" name="description2" value="{{ $about->description2 }}" class="form-control"> <br>

                        <strong> Brithday :</strong>
                        <input type="text" name="brithday" value="{{ $about->brithday }}" class="form-control"> <br>

                        <strong> Website :</strong>
                        <input type="text" name="website" value="{{ $about->website }}" class="form-control"> <br>

                        <strong> Phone :</strong>
                        <input type="text" name="phone" value="{{ $about->phone }}" class="form-control"> <br>

                        <strong> City :</strong>
                        <input type="text" name="city" value="{{ $about->city }}" class="form-control"> <br>

                        <strong> Age :</strong>
                        <input type="text" name="age" value="{{ $about->age }}" class="form-control"> <br>

                        <strong> Dagree :</strong>
                        <input type="text" name="dagree" value="{{ $about->dagree }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" value="{{ $about->email }}" class="form-control"> <br>

                        <strong> Freelance :</strong>
                        <input type="text" name="freelance" value="{{ $about->freelance }}" class="form-control"> <br>

                        <img src="/img/{{$about->img}}" width="70px"><br><br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
