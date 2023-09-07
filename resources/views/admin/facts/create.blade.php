@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Facts</h3>
                        <a class="create__btn" href="{{ route('admin.facts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.facts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title :</strong>
                        <input type="text" name="title" class="form-control"> <br>
                        <strong> Happy Clients :</strong>
                        <input type="text" name="happy_clients" class="form-control"> <br>
                        <strong> Projects :</strong>
                        <input type="text" name="projects" class="form-control"> <br>
                        <strong> Hours of Support :</strong>
                        <input type="text" name="hours_of_support" class="form-control"> <br>
                        <strong> Hard Workers :</strong>
                        <input type="text" name="hard_workers" class="form-control"> <br>
        
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
