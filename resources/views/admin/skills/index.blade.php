@extends('admin.layouts.main')
@section('categories')
active
@endsection
@section('content')

@if ($message = Session::get('warning'))
            <div class="alert alert-warning">
                <p style="color: black;">{{ $message }}</p>
            </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	<!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Skills</h3>
                  <a class="create__btn" href="{{ route('admin.skills.create')}}"><i class="bi bi-plus-circle-fill">
                    </i>Yaratish</a>
                </div>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description Uz</th>
                            <th scope="col">Skills Name Right</th>
                            {{-- <th>Skills Percentage Right</th>
                            <th>Skills Name Left</th>
                            <th>Skills Percentage Left</th> --}}
                            <th scope="col">Data</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{!! \Str::limit($item->description_uz,20) !!}</td>
                            <td>{{ $item->skill_name_r }}</td>
                            {{-- <td>{{ $item->skill_percentage_r }}</td>
                            <td>{{ $item->skill_name_l }}</td>
                            <td>{{ $item->skill_percentage_l }}</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.skills.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.skills.show', $item->id) }}"><i class="bi bi-eye-fill"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.skills.edit', $item->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="bi bi-trash-fill"></i></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $skill ->links() }}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection