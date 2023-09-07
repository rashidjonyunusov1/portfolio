@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Form</h3>
                        <a class="create__btn" href="{{ route('admin.forms.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.forms.update', $form->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Name :</strong>
                        <input type="text" name="name" value="{{ $form->name }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input type="email" name="email" value="{{ $form->email }}" class="form-control"> <br>

                        <strong> Number :</strong>
                        <input type="text" name="number" value="{{ $form->number }}" class="form-control"> <br>

                        <strong> Subject :</strong>
                        <input type="text" name="subject" value="{{ $form->subject }}" class="form-control"> <br>

                        <strong> Message :</strong>
                        <input type="text" name="message" value="{{ $form->message }}" class="form-control"> <br>

                        
                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
