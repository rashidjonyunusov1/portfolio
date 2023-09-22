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
                  {{-- <a class="create__btn" href="{{ route('admin.abouts.create')}}"><i class="bi bi-plus-circle-fill">
                    </i>Yaratish</a> --}}
                    <div class="d-flex justify-content-end m-3">
                        <a href="{{ route('admin.abouts.create') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px;"2 name="create-outline"></ion-icon>Yaratish</button></a>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                      
                    


                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title Uz</th>
                            <th scope="col">Description1</th>
                           {{--  <th>Description2</th>
                            <th>Brithday</th>
                            <th>Website</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Age</th>
                            <th>Dagree</th>
                            <th>Email</th>
                            <th>Freelance</th> --}}
                            <th scope="col">Image</th>
                            <th scope="col">Data</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about as $item)
                            
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ \Str::limit($item->title_uz,50) }}</td>
                            <td>{!! \Str::limit($item->description1_uz,5) !!}</td>
                            {{-- <td>{!! \Str::limit($item->description2,5) !!}</td>
                            <td>{{ \Str::limit($item->brithday,4) }}</td>
                            <td>{{ \Str::limit($item->website,5) }}</td>
                            <td>{{ \Str::limit($item->phone,5) }}</td>
                            <td>{{ \Str::limit($item->city,5) }}</td>
                            <td>{{ \Str::limit($item->age,5) }}</td>
                            <td>{{ \Str::limit($item->dagree,5) }}</td>
                            <td>{{ \Str::limit($item->email,5) }}</td>
                            <td>{{ \Str::limit($item->freelance,5) }}</td> --}}
                            <td><img src="/img/{{ $item->img }}" width="40px"></td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.abouts.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.abouts.show', $item->id) }}"><i class="bi bi-eye-fill"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.abouts.edit', $item->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="bi bi-trash-fill"></i></button>

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