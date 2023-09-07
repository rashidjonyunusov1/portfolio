@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.services.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $service->id }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $service->description }}</td>
                </tr>
                <tr>
                    <td>Services Name</td>
                    <td>{{ $service->services_name }}</td>
                </tr>
                <tr>
                    <td>Services Description</td>
                    <td>{{ $service->services_description }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
