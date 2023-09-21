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
                        <h3>Add about</h3>
                        <a class="create__btn" href="{{ route('admin.abouts.index')}}"> <i class="bi bi-backspace-fill"></i></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title  Uz:</strong>
                        <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control"> <br>

                        <strong> Title Ru:</strong>
                        <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control"> <br>

                        <strong> Title En:</strong>
                        <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control"> <br>

                        <strong> Description1 Uz :</strong>
                        <textarea type="text" value="{{ old('description1_uz') }}" name="description1_uz" class="form-control ckeditor"> 
                        </textarea><br>
                        @error('description1_uz') {{ $message }}<br><br> @enderror

                        <strong> Description1 Ru :</strong>
                        <textarea type="text" value="{{ old('description1_ru') }}" name="description1_ru" class="form-control ckeditor"> 
                        </textarea><br>
                        @error('description1_ru') {{ $message }}<br><br> @enderror

                        <strong> Description1 En :</strong>
                        <textarea type="text" value="{{ old('description1_en') }}" name="description1_en" class="form-control ckeditor"> 
                        </textarea><br>
                        @error('description1_en') {{ $message }}<br><br> @enderror

                        <strong> Description2 Uz :</strong>
                        <textarea type="text" value="{{ old('description2_uz') }}" name="description2_uz" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Description2 Ru :</strong>
                        <textarea type="text" value="{{ old('description2_ru') }}" name="description2_ru" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Description2 En :</strong>
                        <textarea type="text" value="{{ old('description2_en') }}" name="description2_en" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Brithday Uz :</strong>
                        <input type="text" name="brithday_uz" value="{{ old('brithday_uz') }}" class="form-control"> <br>

                        <strong> Brithday Ru :</strong>
                        <input type="text" name="brithday_ru" value="{{ old('brithday_ru') }}" class="form-control"> <br>

                        <strong> Brithday En :</strong>
                        <input type="text" name="brithday_en" value="{{ old('brithday_en') }}" class="form-control"> <br>


                        <strong> Website :</strong>
                        <input type="text" name="website" value="{{ old('website') }}" class="form-control"> <br>

                        <strong> Phone :</strong>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"> <br>

                        <strong> City Uz :</strong>
                        <input type="text" name="city_uz" value="{{ old('city_uz') }}" class="form-control"> <br>

                        <strong> City Ru :</strong>
                        <input type="text" name="city_ru" value="{{ old('city_ru') }}" class="form-control"> <br>

                        <strong> City En :</strong>
                        <input type="text" name="city_en" value="{{ old('city_en') }}" class="form-control"> <br>

                        <strong> Age :</strong>
                        <input type="text" name="age" value="{{ old('age') }}" class="form-control"> <br>

                        <strong> Dagree Uz :</strong>
                        <input type="text" name="dagree_uz" value="{{ old('dagree_uz') }}" class="form-control"> <br>

                        <strong> Dagree Ru :</strong>
                        <input type="text" name="dagree_ru" value="{{ old('dagree_ru') }}" class="form-control"> <br>

                        <strong> Dagree En :</strong>
                        <input type="text" name="dagree_en" value="{{ old('dagree_en') }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"> <br>

                        <strong> Freelance Uz :</strong>
                        <input type="text" name="freelance_uz" value="{{ old('freelance_uz') }}" class="form-control"> <br>

                        <strong> Freelance Ru :</strong>
                        <input type="text" name="freelance_ru" value="{{ old('freelance_ru') }}" class="form-control"> <br>

                        <strong> Freelance En :</strong>
                        <input type="text" name="freelance_en" value="{{ old('freelance_en') }}" class="form-control"> <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" value="{{ old('img') }}" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
               $('.ckeditor').ckeditor();
            });
        </script>

@endsection
