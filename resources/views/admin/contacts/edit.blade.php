@extends('admin.layouts.main')


@section('content')
@if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>There were some problems with your input. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Contacts</h3>
                        <a class="create__btn" href="{{ route('admin.contacts.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.contacts.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Description Uz:</strong>
                        <input type="text" name="description_uz" value="{{ $contact->description_uz }}" class="form-control"> <br>

                        <strong> Description Ru:</strong>
                        <input type="text" name="description_ru" value="{{ $contact->description_ru }}" class="form-control"> <br>

                        <strong> Description En:</strong>
                        <input type="text" name="description_en" value="{{ $contact->description_en }}" class="form-control"> <br>


                        <strong> Location Uz:</strong>
                        <input type="text" name="location_uz" value="{{ $contact->location_uz }}" class="form-control"> <br>

                        <strong> Location :</strong>
                        <input type="text" name="location_ru" value="{{ $contact->location_ru }}" class="form-control"> <br>

                        <strong> Location :</strong>
                        <input type="text" name="location_en" value="{{ $contact->location_en }}" class="form-control"> <br>


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
