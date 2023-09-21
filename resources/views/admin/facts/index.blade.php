@extends('admin.layouts.main')
@section('facts')
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
                    <h3>Facts</h3>
                  <a class="create__btn" href="{{ route('admin.facts.create')}}"><i class="bi bi-plus-circle-fill">
                    </i>Yaratish</a>
                </div>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title Uz</th>
                            <th scope="col">Happy Clients Number</th>
                            <th scope="col">Happy Clients Uz</th>
                            {{-- <th>Projects</th>
                            <th>Hours Of Support</th>
                            <th>Hard Workers</th> --}}
                            <th scope="col">Data</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fact as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->title_uz }}</td>
                            <td>{{ $item->happy_clients_num }}</td>
                            <td>{{ $item->happy_clients_uz }}</td>
                            {{-- <td>{{ $item->projects }}</td>
                            <td>{{ $item->hours_of_support }}</td>
                            <td>{{ $item->hard_workers }}</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.facts.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.facts.show', $item->id) }}"><i class="bi bi-eye-fill"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.facts.edit', $item->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="bi bi-trash-fill"></i></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $fact ->links() }}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection