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
                        <h3>Add Facts</h3>
                        <a class="create__btn" href="{{ route('admin.facts.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.facts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Title Uz:</strong>
                        <input type="text" name="title_uz" class="form-control"> <br>

                        <strong> Title Ru:</strong>
                        <input type="text" name="title_ru" class="form-control"> <br>

                        <strong> Title En:</strong>
                        <input type="text" name="title_en" class="form-control"> <br>

                        <strong> Happy Clients Number:</strong>
                        <input type="text" name="happy_clients_num" class="form-control"> <br>

                        <strong> Happy Clients Uz:</strong>
                        <input type="text" name="happy_clients_uz" class="form-control"> <br>

                        <strong> Happy Clients Ru:</strong>
                        <input type="text" name="happy_clients_ru" class="form-control"> <br>

                        <strong> Happy Clients En:</strong>
                        <input type="text" name="happy_clients_en" class="form-control"> <br>

                        <strong> Projects Number:</strong>
                        <input type="text" name="projects_num" class="form-control"> <br>

                        <strong> Projects Uz:</strong>
                        <input type="text" name="projects_uz" class="form-control"> <br>

                        <strong> Projects Ru:</strong>
                        <input type="text" name="projects_ru" class="form-control"> <br>

                        <strong> Projects En:</strong>
                        <input type="text" name="projects_en" class="form-control"> <br>

                        <strong> Hours of Support Number:</strong>
                        <input type="text" name="hours_of_support_num" class="form-control"> <br>

                        <strong> Hours of Support Uz:</strong>
                        <input type="text" name="hours_of_support_uz" class="form-control"> <br>

                        <strong> Hours of Support Ru:</strong>
                        <input type="text" name="hours_of_support_ru" class="form-control"> <br>

                        <strong> Hours of Support En:</strong>
                        <input type="text" name="hours_of_support_en" class="form-control"> <br>

                        <strong> Hard Workers Number:</strong>
                        <input type="text" name="hard_workers_num" class="form-control"> <br>

                        <strong> Hard Workers Uz:</strong>
                        <input type="text" name="hard_workers_uz" class="form-control"> <br>

                        <strong> Hard Workers Ru:</strong>
                        <input type="text" name="hard_workers_ru" class="form-control"> <br>

                        <strong> Hard Workers En:</strong>
                        <input type="text" name="hard_workers_en" class="form-control"> <br>
        
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
