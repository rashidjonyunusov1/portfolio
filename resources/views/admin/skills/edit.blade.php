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
                        <h3>Edit Skills</h3>
                        <a class="create__btn" href="{{ route('admin.skills.index')}}"> <i class="bi bi-backspace-fill"></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <strong> Description Uz:</strong>
                        <input type="text" name="description_uz" value="{{ $skill->description_uz }}" class="form-control"> <br>

                        <strong> Description Ru:</strong>
                        <input type="text" name="description_ru" value="{{ $skill->description_ru }}" class="form-control"> <br>

                        <strong> Description En:</strong>
                        <input type="text" name="description_en" value="{{ $skill->description_en }}" class="form-control"> <br>


                        <strong> Skills Name Right :</strong>
                        <input type="text" name="skill_name_r" value="{{ $skill->skill_name_r }}" class="form-control"> <br>

                        <strong> Skills Precentage Right :</strong>
                        <input type="text" name="skill_percentage_r" value="{{ $skill->skill_percentage_r }}" class="form-control"> <br>

                        <strong> Skills Name Left :</strong>
                        <input type="text" name="skill_name_l" value="{{ $skill->skill_name_l }}" class="form-control"> <br>

                        <strong> Skills Precentage Left :</strong>
                        <input type="text" name="skill_percentage_l" value="{{ $skill->skill_percentage_l }}" class="form-control"> <br>


                        <input type="submit" value="Edit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
