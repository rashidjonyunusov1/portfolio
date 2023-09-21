@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.resume.index') }}"><i class="bi bi-backspace-fill"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $resume->id }}</td>
                </tr>
                <tr>
                    <td>Resume Uz</td>
                    <td>
                        <img src="/resume/{{$resume->resume}}" width="80px">
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
