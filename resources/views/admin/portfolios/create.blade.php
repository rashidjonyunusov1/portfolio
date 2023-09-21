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
                        <h3>Add Portfolio</h3>
                        <a class="create__btn" href="{{ route('admin.portfolios.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
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

                        {{-- <strong> Category :</strong>
                        <input type="text" name="category" class="form-control"> <br> --}}

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <strong> URL :</strong>
                        <input type="text" name="url" class="form-control"> <br>


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

