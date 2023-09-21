@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.abouts.index') }}"><i class="bi bi-backspace-fill"></i>Back</a>
            </div>
            <table>
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
</main>
<!-- MAIN -->

@endsection
