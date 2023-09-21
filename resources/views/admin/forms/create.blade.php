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
                        <h3>Add Form</h3>
                        <a class="create__btn" href="{{ route('admin.forms.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.forms.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Name :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" class="form-control"> <br>

                        <strong> Number :</strong>
                        <input type="text" name="number" class="form-control"> <br>

                        <strong> Subject :</strong>
                        <input type="text" name="subject" class="form-control"> <br>

                        <strong> Message :</strong>
                        <input type="text" name="message" class="form-control"> <br>

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
