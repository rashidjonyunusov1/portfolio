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
                        <h3>Add Contacts</h3>
                        <a class="create__btn" href="{{ route('admin.contacts.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Description Uz:</strong>
                        <textarea type="text" value="{{ old('description_uz') }}" name="description_uz" class="form-control ckeditor"> 
                        </textarea><br>
                        
                        <strong> Description Ru:</strong>
                        <textarea type="text" value="{{ old('description_ru') }}" name="description_ru" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Description En:</strong>
                        <textarea type="text" value="{{ old('description_en') }}" name="description_en" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Location Uz:</strong>
                        <input type="text" name="location_uz" class="form-control"> <br>

                        <strong> Location Ru:</strong>
                        <input type="text" name="location_ru" class="form-control"> <br>

                        <strong> Location En:</strong>
                        <input type="text" name="location_en" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" class="form-control"> <br>

                        <strong> Call :</strong>
                        <input type="text" name="call" class="form-control"> <br>

                        <strong> Location URL :</strong>
                        <input type="text" name="location_url" class="form-control"> <br>


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
