@extends('admin.layouts.main')
@section('contacts')
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
                    <h3>Contacts</h3>
                  <a class="create__btn" href="{{ route('admin.contacts.create')}}"><i class="bi bi-plus-circle-fill">
                    </i>Yaratish</a>
                </div>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th scope="col">Description Uz</th>
                            {{-- <th>Location</th>
                            <th>Email</th> --}}
                            <th scope="col">Call</th>
                            {{-- <th>Location URL</th> --}}
                            <th scope="col">Data</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{!! \Str::limit($item->description_uz,20) !!}</td>
                            {{-- <td>{{ $item->location }}</td>
                            <td>{{ $item->email }}</td> --}}
                            <td>{{ $item->call }}</td>
                            {{-- <td>{{ \Str::limit($item->location_url,20) }}</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.contacts.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.contacts.show', $item->id) }}"><i class="bi bi-eye-fill"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.contacts.edit', $item->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="bi bi-trash-fill"></i></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 {{ $contact ->links() }}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection