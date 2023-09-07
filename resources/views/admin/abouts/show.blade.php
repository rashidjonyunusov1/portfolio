@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.abouts.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $about->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $about->title }}</td>
                </tr>
                <tr>
                    <td>Description1</td>
                    <td>{{ $about->description1 }}</td>
                </tr>
                <tr>
                    <td>Description2</td>
                    <td>{{ $about->description2 }}</td>
                </tr>
                <tr>
                    <td>Brithday</td>
                    <td>{{ $about->brithday }}</td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>{{ $about->website }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $about->phone }}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>{{ $about->city }}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{ $about->age }}</td>
                </tr>
                <tr>
                    <td>Dagree</td>
                    <td>{{ $about->dagree }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $about->email }}</td>
                </tr>
                <tr>
                    <td>Freelance</td>
                    <td>{{ $about->freelance }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <img src="/img/{{$about->img}}" width="80px">
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
