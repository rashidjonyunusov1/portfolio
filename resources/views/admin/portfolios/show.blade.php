@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.portfolios.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $portfolio->id }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $portfolio->description }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $portfolio->category }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <img src="/img/{{$portfolio->img}}" width="80px">
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
