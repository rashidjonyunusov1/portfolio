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
                        <h3>Edit Facts</h3>
                        <a class="create__btn" href="{{ route('admin.facts.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.facts.update', $fact->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Title Uz:</strong>
                        <input type="text" name="title_uz" value="{{ $fact->title_uz }}" class="form-control"> <br>

                        <strong> Title Ru:</strong>
                        <input type="text" name="title_ru" value="{{ $fact->title_ru }}" class="form-control"> <br>

                        <strong> Title En:</strong>
                        <input type="text" name="title_en" value="{{ $fact->title_en }}" class="form-control"> <br>


                        <strong> Happy Clients Number:</strong>
                        <input type="text" name="happy_clients_num" value="{{ $fact->happy_clients_num }}" class="form-control"> <br>

                        <strong> Happy Clients Uz:</strong>
                        <input type="text" name="happy_clients_uz" value="{{ $fact->happy_clients_en }}" class="form-control"> <br>

                        <strong> Happy Clients Ru:</strong>
                        <input type="text" name="happy_clients_ru" value="{{ $fact->happy_clients_ru }}" class="form-control"> <br>

                        <strong> Happy Clients En:</strong>
                        <input type="text" name="happy_clients_en" value="{{ $fact->happy_clients_en }}" class="form-control"> <br>

                        <strong> Projects Number:</strong>
                        <input type="text" name="projects_num" value="{{ $fact->projects_num }}" class="form-control"> <br>

                        <strong> Projects Uz:</strong>
                        <input type="text" name="projects_uz" value="{{ $fact->projects_uz }}" class="form-control"> <br>

                        <strong> Projects Ru:</strong>
                        <input type="text" name="projects_ru" value="{{ $fact->projects_ru }}" class="form-control"> <br>

                        <strong> Projects En:</strong>
                        <input type="text" name="projects_en" value="{{ $fact->projects_en }}" class="form-control"> <br>


                        <strong> Hours of Support Number:</strong>
                        <input type="text" name="hours_of_support_num" value="{{ $fact->hours_of_support_num }}" class="form-control"> <br>

                        <strong> Hours of Support Uz:</strong>
                        <input type="text" name="hours_of_support_uz" value="{{ $fact->hours_of_support_uz }}" class="form-control"> <br>

                        <strong> Hours of Support Ru:</strong>
                        <input type="text" name="hours_of_support_ru" value="{{ $fact->hours_of_support_ru }}" class="form-control"> <br>

                        <strong> Hours of Support En:</strong>
                        <input type="text" name="hours_of_support_en" value="{{ $fact->hours_of_support_en }}" class="form-control"> <br>


                        <strong> Hard Workers Number:</strong>
                        <input type="text" name="hard_workers_num" value="{{ $fact->hard_workers_num }}" class="form-control"> <br>

                        <strong> Hard Workers Uz:</strong>
                        <input type="text" name="hard_workers_uz" value="{{ $fact->hard_workers_uz }}" class="form-control"> <br>

                        <strong> Hard Workers Ru:</strong>
                        <input type="text" name="hard_workers_ru" value="{{ $fact->hard_workers_ru }}" class="form-control"> <br>

                        <strong> Hard Workers En:</strong>
                        <input type="text" name="hard_workers_en" value="{{ $fact->hard_workers_en }}" class="form-control"> <br>

                        
                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
