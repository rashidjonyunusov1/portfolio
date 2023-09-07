@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Home</h3>
                        <a class="create__btn" href="{{ route('admin.home.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Name :</strong>
                        <input type="text" name="name" class="form-control"> <br>
                        
                        <strong> Jobs :</strong>
                        <input type="text" name="jobs" class="form-control"> <br>

                      
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
