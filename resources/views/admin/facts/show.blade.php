@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.facts.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $fact->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $fact->title }}</td>
                </tr>
                <tr>
                    <td>Happy Clients</td>
                    <td>{{ $fact->happy_clients }}</td>
                </tr>
                <tr>
                    <td>Projects</td>
                    <td>{{ $fact->projects }}</td>
                </tr>
                <tr>
                    <td>Hours of Support</td>
                    <td>{{ $fact->hours_of_support }}</td>
                </tr>
                <tr>
                    <td>Hard Workers</td>
                    <td>{{ $fact->hard_workers }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
