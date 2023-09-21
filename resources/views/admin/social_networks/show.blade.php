@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.social_networks.index') }}"> <i class="bi bi-backspace-fill"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID:</td>
                    <td>{{ $social_network->id }}</td>
                </tr>
                <tr>
                    <td>Title:</td>
                    <td>{{ $social_network->icon }}</td>
                </tr>
                <tr>
                    <td>URL:</td>
                    <td>{{ $social_network->url }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
