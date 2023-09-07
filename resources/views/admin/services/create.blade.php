@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Services</h3>
                        <a class="create__btn" href="{{ route('admin.services.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Description :</strong>
                        <textarea type="text" value="{{ old('description') }}" name="description" class="form-control ckeditor"> 
                        </textarea><br> 

                        <strong> Services Name :</strong>
                        <input type="text" name="services_name" class="form-control"> <br>

                        <strong> Services Description :</strong>
                        <input type="text" name="services_description" class="form-control"> <br>
                        

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
