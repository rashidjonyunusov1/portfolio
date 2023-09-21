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
                        <h3>Edit Services</h3>
                        <a class="create__btn" href="{{ route('admin.services.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       
                        <strong> Description Uz:</strong>
                        <input type="text" name="description_uz" value="{{ $service->description_uz }}" class="form-control"> <br>
                        
                        <strong> Description Ru:</strong>
                        <input type="text" name="description_ru" value="{{ $service->description_ru }}" class="form-control"> <br>
                        
                        <strong> Description En:</strong>
                        <input type="text" name="description_en" value="{{ $service->description_en }}" class="form-control"> <br>
                        
                        <strong> Services Name Uz:</strong>
                        <input type="text" name="services_name_uz" value="{{ $service->services_name_uz }}" class="form-control"> <br>
                        
                        <strong> Services Name Ru:</strong>
                        <input type="text" name="services_name_ru" value="{{ $service->services_name_ru }}" class="form-control"> <br>
                        
                        <strong> Services Name En:</strong>
                        <input type="text" name="services_name_en" value="{{ $service->services_name_en }}" class="form-control"> <br>
                        
                        <strong> Services Description Uz:</strong>
                        <input type="text" name="services_description_uz" value="{{ $service->services_description_uz }}" class="form-control"> <br>
                       
                        <strong> Services Description Ru:</strong>
                        <input type="text" name="services_description_ru" value="{{ $service->services_description_ru }}" class="form-control"> <br>
                       
                        <strong> Services Description En:</strong>
                        <input type="text" name="services_description_en" value="{{ $service->services_description_en }}" class="form-control"> <br>
                       

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
