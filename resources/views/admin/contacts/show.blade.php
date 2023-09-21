@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.contacts.index') }}"><i class="bi bi-backspace-fill"></i>Qaytish</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $contact->id }}</td>
                </tr>
                <tr>
                    <td>Description Uz</td>
                    <td>{!! $contact->description_uz !!}</td>
                </tr>
                <tr>
                    <td>Description Ru</td>
                    <td>{!! $contact->description_ru !!}</td>
                </tr>
                <tr>
                    <td>Description En</td>
                    <td>{!! $contact->description_en !!}</td>
                </tr>
                <tr>
                    <td>Location Uz</td>
                    <td>{{ $contact->location_uz }}</td>
                </tr>
                <tr>
                    <td>Location Ru</td>
                    <td>{{ $contact->location_ru }}</td>
                </tr>
                <tr>
                    <td>Location En</td>
                    <td>{{ $contact->location_en }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <td>Call</td>
                    <td>{{ $contact->call }}</td>
                </tr>
                <tr>
                    <td>Location URL</td>
                    <td>{{ $contact->location_url }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
