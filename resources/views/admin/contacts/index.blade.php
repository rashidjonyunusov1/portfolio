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
                  <a class="create__btn" href="{{ route('admin.contacts.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Email</th>
                            <th>Call</th>
                            <th>Location URL</th>
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ \Str::limit($item->description,20) }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->call }}</td>
                            <td>{{ \Str::limit($item->location_url,20) }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.contacts.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.contacts.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.contacts.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

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