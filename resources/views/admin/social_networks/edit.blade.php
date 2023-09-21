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
                        <h3>Edit Social Networks</h3>
                        <a class="create__btn" href="{{ route('admin.social_networks.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.social_networks.update', $social_network->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Icon :</strong>
                        <input type="text" name="icon" value="{{ $social_network->icon }}" class="form-control"> <br>

                        <strong> URL :</strong>
                        <input type="text" name="url" value="{{ $social_network->url }}" class="form-control"> <br>

                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
