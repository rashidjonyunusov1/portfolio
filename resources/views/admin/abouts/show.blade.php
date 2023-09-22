@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>

<div class="container-fluid pt-4 px-4">
    <div class="m-n2">
        <a href="{{ route('admin.abouts.index') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px; margin-bottom: 0;" name="arrow-back-outline"></ion-icon>Orqaga</button></a>
    </div>

    <div class="table-data row g-4">
        <div class="order col-12 ">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Show</h3>
              <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>{{ $about->id }}</td>
                </tr>
                <tr>
                    <td>Title Uz</td>
                    <td>{{ $about->title_uz }}</td>
                </tr>
                <tr>
                    <td>Title Ru</td>
                    <td>{{ $about->title_ru }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $about->title_en }}</td>
                </tr>
                <tr>
                    <td>Description1 Uz</td>
                    <td>{!! $about->description1_uz !!}</td>
                </tr>
                <tr>
                    <td>Description1 Ru</td>
                    <td>{!! $about->description1_ru !!}</td>
                </tr>
                <tr>
                    <td>Description1</td>
                    <td>{!! $about->description1_en !!}</td>
                </tr>
                <tr>
                    <td>Description2 Uz</td>
                    <td>{!! $about->description2_uz !!}</td>
                </tr>
                <tr>
                    <td>Description2 Ru</td>
                    <td>{!! $about->description2_ru !!}</td>
                </tr>
                <tr>
                    <td>Description2</td>
                    <td>{!! $about->description2_en !!}</td>
                </tr>
                <tr>
                    <td>Brithday</td>
                    <td>{{ $about->brithday_uz }}</td>
                </tr>
                <tr>
                    <td>Brithday Uz</td>
                    <td>{{ $about->brithday_ru }}</td>
                </tr>
                <tr>
                    <td>Brithday Ru</td>
                    <td>{{ $about->brithday_en }}</td>
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
                    <td>City Uz</td>
                    <td>{{ $about->city_uz }}</td>
                </tr>
                <tr>
                    <td>City Ru</td>
                    <td>{{ $about->city_ru }}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>{{ $about->city_en }}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{ $about->age }}</td>
                </tr>
                <tr>
                    <td>Dagree Uz</td>
                    <td>{{ $about->dagree_uz }}</td>
                </tr>
                <tr>
                    <td>Dagree Ru</td>
                    <td>{{ $about->dagree_ru }}</td>
                </tr>
                <tr>
                    <td>Dagree</td>
                    <td>{{ $about->dagree_en }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $about->email }}</td>
                </tr>
                <tr>
                    <td>Freelance Uz</td>
                    <td>{{ $about->freelance_uz }}</td>
                </tr>
                <tr>
                    <td>Freelance Ru</td>
                    <td>{{ $about->freelance_ru }}</td>
                </tr>
                <tr>
                    <td>Freelance</td>
                    <td>{{ $about->freelance_en }}</td>
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
    </div>
</div>

</main>
<!-- MAIN -->

@endsection
