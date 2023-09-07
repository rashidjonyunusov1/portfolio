@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Home</h3>
                        <a class="create__btn" href="{{ route('admin.home.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Name :</strong>
                        <input type="text" name="name" value="{{ $home->name }}" class="form-control"> <br>

                        <strong> Jobs :</strong>
                        <input type="text" name="jobs" value="{{ $home->jobs }}" class="form-control"> <br>

                        
                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
