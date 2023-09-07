@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.contacts.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $contact->id }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $contact->description }}</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>{{ $contact->location }}</td>
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
