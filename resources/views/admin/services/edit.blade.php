@extends('admin.layouts.main')


@section('content')

    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit Services</h3>
                        <a class="create__btn" href="{{ route('admin.services.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       
                        <strong> Description :</strong>
                        <input type="text" name="description" value="{{ $service->description }}" class="form-control"> <br>
                        
                        <strong> Services Name :</strong>
                        <input type="text" name="services_name" value="{{ $service->services_name }}" class="form-control"> <br>
                        
                        <strong> Services Description :</strong>
                        <input type="text" name="services_description" value="{{ $service->services_description }}" class="form-control"> <br>
                       

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
