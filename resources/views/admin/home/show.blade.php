@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.home.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $home->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $home->name }}</td>
                </tr>
                <tr>
                    <td>Jobs</td>
                    <td>{{ $home->jobs }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
