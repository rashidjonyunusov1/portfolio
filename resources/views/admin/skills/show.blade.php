@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.skills.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $skill->id }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $skill->description }}</td>
                </tr>
                <tr>
                    <td>Skills Name Right</td>
                    <td>{{ $skill->skill_name_r }}</td>
                </tr>
                <tr>
                    <td>Skills Percentage Right</td>
                    <td>
                       <td>{{ $skill->skill_percentage_r }}</td>
                    </td>
                </tr>
                <tr>
                    <td>Skills Name Left</td>
                    <td>{{ $skill->skill_name_l }}</td>
                </tr>
                <tr>
                    <td>Skills Percentage Left</td>
                    <td>
                       <td>{{ $skill->skill_percentage_l }}</td>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->

@endsection
