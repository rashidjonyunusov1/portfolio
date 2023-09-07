@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add social_networks</h3>
                        <a class="create__btn" href="{{ route('admin.social_networks.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.social_networks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Icon :</strong>
                        <input type="text" name="icon" class="form-control"> <br>

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
