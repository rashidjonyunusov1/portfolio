@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Contacts</h3>
                        <a class="create__btn" href="{{ route('admin.contacts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Description :</strong>
                        <input type="text" name="description" value="{{ $contact->description }}" class="form-control"> <br>

                        <strong> Location :</strong>
                        <input type="text" name="location" value="{{ $contact->location }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" value="{{ $contact->email }}" class="form-control"> <br>

                        <strong> Call :</strong>
                        <input type="text" name="call" value="{{ $contact->call }}" class="form-control"> <br>

                        <strong> Location URL :</strong>
                        <input type="text" name="location_url" value="{{ $contact->location_url }}" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
