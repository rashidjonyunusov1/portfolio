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
                  <a class="create__btn" href="{{ route('admin.portfolios.create')}}"><i class="bx bxs-folder-plus">
                    </i>Yaratish</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>URL</th>
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolio as $item)
                            
                        
                        
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ \Str::limit($item->description,20) }}</td>
                            <td>{{ $item->category }}</td>
                            <td><img src="/img/{{ $item->img }}" width="40px"></td>
                            <!-- <td><img src="/img/1693318367-photo_2022-06-26_18-56-35.jpg" width="40px"></td> -->
                            <td>{{ \Str::limit($item->url,10) }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                <form method="POST" action="{{ route('admin.portfolios.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-primary" href="{{ route('admin.portfolios.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                    <a class="btn btn-primary" href="{{ route('admin.portfolios.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

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