@extends('admin.layouts.main')
@section('abouts')
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
                    <h3>Abouts</h3>
                  <a class="create__btn" href="{{ route('admin.abouts.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description1</th>
                            <th>Description2</th>
                            <th>Brithday</th>
                            <th>Website</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Age</th>
                            <th>Dagree</th>
                            <th>Email</th>
                            <th>Freelance</th>
                            <th>Image</th>
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ \Str::limit($item->title,5) }}</td>
                            <td>{{ \Str::limit($item->description1,5) }}</td>
                            <td>{{ \Str::limit($item->description2,5) }}</td>
                            <td>{{ \Str::limit($item->brithday,4) }}</td>
                            <td>{{ \Str::limit($item->website,5) }}</td>
                            <td>{{ \Str::limit($item->phone,5) }}</td>
                            <td>{{ \Str::limit($item->city,5) }}</td>
                            <td>{{ \Str::limit($item->age,5) }}</td>
                            <td>{{ \Str::limit($item->dagree,5) }}</td>
                            <td>{{ \Str::limit($item->email,5) }}</td>
                            <td>{{ \Str::limit($item->freelance,5) }}</td>
                            <td><img src="/img/{{ $item->img }}" width="40px"></td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.abouts.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.abouts.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.abouts.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 {{ $about->links() }} 
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection