@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.facts.index') }}"><i class="bi bi-backspace-fill"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $fact->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $fact->title_uz }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $fact->title_ru }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $fact->title_en }}</td>
                </tr>
                <tr>
                    <td>Happy Clients Number</td>
                    <td>{{ $fact->happy_clients_num }}</td>
                </tr>
                <tr>
                    <td>Happy Clients Uz</td>
                    <td>{{ $fact->happy_clients_uz }}</td>
                </tr>
                <tr>
                    <td>Happy Clients Ru</td>
                    <td>{{ $fact->happy_clients_ru }}</td>
                </tr>
                <tr>
                    <td>Happy Clients En</td>
                    <td>{{ $fact->happy_clients_en }}</td>
                </tr>
                <tr>
                    <td>Projects Number</td>
                    <td>{{ $fact->projects_num }}</td>
                </tr>
                <tr>
                    <td>Projects Uz</td>
                    <td>{{ $fact->projects_uz }}</td>
                </tr>
                <tr>
                    <td>Projects Ru</td>
                    <td>{{ $fact->projects_ru }}</td>
                </tr>
                <tr>
                    <td>Projects En</td>
                    <td>{{ $fact->projects_en }}</td>
                </tr>
                <tr>
                    <td>Hours of Support Number</td>
                    <td>{{ $fact->hours_of_support_num }}</td>
                </tr>
                <tr>
                    <td>Hours of Support Uz</td>
                    <td>{{ $fact->hours_of_support_uz }}</td>
                </tr>
                <tr>
                    <td>Hours of Support Ru</td>
                    <td>{{ $fact->hours_of_support_ru }}</td>
                </tr>
                <tr>
                    <td>Hours of Support En</td>
                    <td>{{ $fact->hours_of_support_en }}</td>
                </tr>
                <tr>
                    <td>Hard Workers Number</td>
                    <td>{{ $fact->hard_workers_num }}</td>
                </tr>
                <tr>
                    <td>Hard Workers Uz</td>
                    <td>{{ $fact->hard_workers_uz }}</td>
                </tr>
                <tr>
                    <td>Hard Workers Ru</td>
                    <td>{{ $fact->hard_workers_ru }}</td>
                </tr>
                <tr>
                    <td>Hard Workers En</td>
                    <td>{{ $fact->hard_workers_en }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
