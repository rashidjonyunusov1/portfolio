@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.services.index') }}"><i class="bi bi-backspace-fill"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $service->id }}</td>
                </tr>
                <tr>
                    <td>Description Uz</td>
                    <td>{!! $service->description_uz !!}</td>
                </tr>
                <tr>
                    <td>Description Ru</td>
                    <td>{!! $service->description_uz !!}</td>
                </tr>
                <tr>
                    <td>Description En</td>
                    <td>{!! $service->description_uz !!}</td>
                </tr>
                <tr>
                    <td>Services Name Uz</td>
                    <td>{{ $service->services_name_uz }}</td>
                </tr>
                <tr>
                    <td>Services Name Ru</td>
                    <td>{{ $service->services_name_ru }}</td>
                </tr>
                <tr>
                    <td>Services Name En</td>
                    <td>{{ $service->services_name_en }}</td>
                </tr>
                <tr>
                    <td>Services Description Uz</td>
                    <td>{{ $service->services_description_uz }}</td>
                </tr>
                <tr>
                    <td>Services Description Ru</td>
                    <td>{{ $service->services_description_ru }}</td>
                </tr>
                <tr>
                    <td>Services Description En</td>
                    <td>{{ $service->services_description_en }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
