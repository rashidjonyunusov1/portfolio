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
                        <a class="create__btn" href="{{ route('admin.abouts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title :</strong>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"> <br>

                        <strong> Description1 :</strong>
                        <textarea type="text" value="{{ old('description1') }}" name="description1" class="form-control ckeditor"> 
                        </textarea><br>
                        @error('description1') {{ $message }}<br><br> @enderror

                        <strong> Description2 :</strong>
                        <textarea type="text" value="{{ old('description2') }}" name="description2" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Brithday :</strong>
                        <input type="text" name="brithday" value="{{ old('brithday') }}" class="form-control"> <br>

                        <strong> Website :</strong>
                        <input type="text" name="website" value="{{ old('website') }}" class="form-control"> <br>

                        <strong> Phone :</strong>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"> <br>

                        <strong> City :</strong>
                        <input type="text" name="city" value="{{ old('city') }}" class="form-control"> <br>

                        <strong> Age :</strong>
                        <input type="text" name="age" value="{{ old('age') }}" class="form-control"> <br>

                        <strong> Dagree :</strong>
                        <input type="text" name="dagree" value="{{ old('dagree') }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"> <br>

                        <strong> Freelance :</strong>
                        <input type="text" name="freelance" value="{{ old('freelance') }}" class="form-control"> <br>

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
