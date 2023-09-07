@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Profile</h3>
                        <a class="create__btn" href="{{ route('admin.profile_img.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.profile_img.update', $profile_img->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <img src="/img/{{$profile_img->img}}" width="70px"><br><br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
