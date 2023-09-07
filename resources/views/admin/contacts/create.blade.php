@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Contacts</h3>
                        <a class="create__btn" href="{{ route('admin.contacts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Description :</strong>
                        <textarea type="text" value="{{ old('description') }}" name="description" class="form-control ckeditor"> 
                        </textarea><br>

                        <strong> Location :</strong>
                        <input type="text" name="location" class="form-control"> <br>

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
