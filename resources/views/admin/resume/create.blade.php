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
                        <h3>Add Resume</h3>
                        <a class="create__btn" href="{{ route('admin.resume.index')}}"> <i class="bi bi-backspace-fill"></i></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.resume.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Resume  Uz:</strong>
                        <input type="file" name="resume" value="{{ old('resume_uz') }}" class="form-control"> <br>


                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

        {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
               $('.ckeditor').ckeditor();
            });
        </script> --}}

@endsection
