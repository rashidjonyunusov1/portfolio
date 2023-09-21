@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.forms.index') }}"><i class="bi bi-backspace-fill"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $form->id }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $form->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $form->email }}</td>
                </tr>
                <tr>
                    <td>Number</td>
                    <td>{{ $form->number }}</td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>{{ $form->subject }}</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{ $form->message }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
