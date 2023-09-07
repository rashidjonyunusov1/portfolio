@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.profile_img.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $profile_img->id }}</td>
                </tr>
                <tr>
                    <td>Icon</td>
                    <td>
                        <img src="/img/{{$profile_img->img}}" width="80px">
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
