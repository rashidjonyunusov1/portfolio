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
                  <a class="create__btn" href="{{ route('admin.facts.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Happy Clients</th>
                            <th>Projects</th>
                            <th>Hours Of Support</th>
                            <th>Hard Workers</th>
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fact as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->happy_clients }}</td>
                            <td>{{ $item->projects }}</td>
                            <td>{{ $item->hours_of_support }}</td>
                            <td>{{ $item->hard_workers }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.facts.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.facts.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.facts.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

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