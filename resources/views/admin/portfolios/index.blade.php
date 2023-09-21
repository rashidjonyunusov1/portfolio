@extends('admin.layouts.main')
@section('portfolios')
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
                    <h3>Portfolios</h3>
                  <a class="create__btn" href="{{ route('admin.portfolios.create')}}"><i class="bi bi-plus-circle-fill">
                    </i>Yaratish</a>
                </div>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description Uz</th>
                            {{-- <th scope="col">Category</th> --}}
                            <th scope="col">Image</th>
                            {{-- <th scope="col">URL</th> --}}
                            <th scope="col">Data</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolio as $item)
                            
                        
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{!! \Str::limit($item->description_uz,20) !!}</td>
                            {{-- <td>{{ $item->category }}</td> --}}
                            <td><img src="/img/{{ $item->img }}" width="40px"></td>
                            <!-- <td><img src="/img/1693318367-photo_2022-06-26_18-56-35.jpg" width="40px"></td> -->
                            {{-- <td>{{ \Str::limit($item->url,10) }}</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.portfolios.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.portfolios.show', $item->id) }}"><i class="bi bi-eye-fill"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.portfolios.edit', $item->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="bi bi-trash-fill"></i></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $portfolio ->links() }}
            </div>
           
        </div>
    </main>
    <!-- MAIN -->
    
@endsection