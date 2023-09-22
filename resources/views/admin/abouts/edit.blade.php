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
                        {{-- <a class="create__btn" href="{{ route('admin.abouts.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a> --}}
                        <div class="m-n2">
                            <a href="{{ route('admin.abouts.index') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px; margin-bottom: 0;" name="arrow-back-outline"></ion-icon>Orqaga</button></a>
                        </div>
                    </div>

                    <form class="create__inputs" action="{{ route('admin.abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> title Uz:</strong>
                        <input type="text" name="title_uz" value="{{ $about->title_uz }}" class="form-control"> <br>

                        <strong> title Ru:</strong>
                        <input type="text" name="title_ru" value="{{ $about->title_ru }}" class="form-control"> <br>

                        <strong> title En:</strong>
                        <input type="text" name="title_en" value="{{ $about->title_en }}" class="form-control"> <br>

                        <strong> Description1 Uz:</strong>
                        <input type="text" name="description1_uz" value="{!! $about->description1_uz !!}" class="form-control"> <br>
                        
                        <strong> Description1 Ru:</strong>
                        <input type="text" name="description1_ru" value="{!! $about->description1_ru !!}" class="form-control"> <br>

                        <strong> Description1 En:</strong>
                        <input type="text" name="description1_en" value="{!! $about->description1_en !!}" class="form-control"> <br>

                        <strong> Description2 Uz:</strong>
                        <input type="text" name="description2_uz" value="{!! $about->description2_uz !!}" class="form-control"> <br>

                        <strong> Description2 Ru:</strong>
                        <input type="text" name="description2_ru" value="{!! $about->description2_ru !!}" class="form-control"> <br>

                        <strong> Description2 En:</strong>
                        <input type="text" name="description2_en" value="{!! $about->description2_en !!}" class="form-control"> <br>

                        <strong> Brithday Uz:</strong>
                        <input type="text" name="brithday_uz" value="{{ $about->brithday_uz }}" class="form-control"> <br>

                        <strong> Brithday Ru:</strong>
                        <input type="text" name="brithday_ru" value="{{ $about->brithday_ru }}" class="form-control"> <br>

                        <strong> Brithday En:</strong>
                        <input type="text" name="brithday_en" value="{{ $about->brithday_en }}" class="form-control"> <br>

                        <strong> Website :</strong>
                        <input type="text" name="website" value="{{ $about->website }}" class="form-control"> <br>

                        <strong> Phone :</strong>
                        <input type="text" name="phone" value="{{ $about->phone }}" class="form-control"> <br>

                        <strong> City Uz:</strong>
                        <input type="text" name="city_uz" value="{{ $about->city_uz }}" class="form-control"> <br>

                        <strong> City Ru:</strong>
                        <input type="text" name="city_ru" value="{{ $about->city_ru }}" class="form-control"> <br>

                        <strong> City En:</strong>
                        <input type="text" name="city_en" value="{{ $about->city_en }}" class="form-control"> <br>

                        <strong> Age :</strong>
                        <input type="text" name="age" value="{{ $about->age }}" class="form-control"> <br>

                        <strong> Dagree Uz:</strong>
                        <input type="text" name="dagree_uz" value="{{ $about->dagree_uz }}" class="form-control"> <br>

                        <strong> Dagree Ru:</strong>
                        <input type="text" name="dagree_ru" value="{{ $about->dagree_ru }}" class="form-control"> <br>

                        <strong> Dagree En:</strong>
                        <input type="text" name="dagree_en" value="{{ $about->dagree_en }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" value="{{ $about->email }}" class="form-control"> <br>

                        <strong> Freelance Uz:</strong>
                        <input type="text" name="freelance_uz" value="{{ $about->freelance_uz }}" class="form-control"> <br>

                        <strong> Freelance Ru:</strong>
                        <input type="text" name="freelance_ru" value="{{ $about->freelance_ru }}" class="form-control"> <br>

                        <strong> Freelance En:</strong>
                        <input type="text" name="freelance_en" value="{{ $about->freelance_en }}" class="form-control"> <br>

                        <img src="/img/{{$about->img}}" width="70px"><br><br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" class="btn btn-primary" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
