@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Facts</h3>
                        <a class="create__btn" href="{{ route('admin.facts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.facts.update', $fact->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Title :</strong>
                        <input type="text" name="title" value="{{ $fact->title }}" class="form-control"> <br>

                        <strong> Happy Clients :</strong>
                        <input type="text" name="happy_clients" value="{{ $fact->happy_clients }}" class="form-control"> <br>

                        <strong> Projects :</strong>
                        <input type="text" name="projects" value="{{ $fact->projects }}" class="form-control"> <br>

                        <strong> Hours of Support :</strong>
                        <input type="text" name="hours_of_support" value="{{ $fact->hours_of_support }}" class="form-control"> <br>

                        <strong> Hard Workers :</strong>
                        <input type="text" name="hard_workers" value="{{ $fact->hard_workers }}" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
