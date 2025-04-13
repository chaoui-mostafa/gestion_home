@extends('layouts.SidBaar')

@section('title', 'admin.List')

@section('content_admin')



<!DOCTYPE html>
<html>

<head>
    <title>Homes List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Homes List</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>City</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Reservation Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($homes as $home)
                <tr>
                    <td><img src="{{ asset('storage/' . $home->image_home) }}" alt="{{ $home->title_home }}" width="100"></td>
                    <td>{{ $home->title_home }}</td>
                    <td>{{ $home->categorie ? $home->categorie->nom_category : 'No Category' }}</td>
                    <td>{{ $home->type ? $home->type->nom_type : 'No Type' }}</td>
                    <td>{{ $home->ville ? $home->ville->nom_ville : 'No City' }}</td>
                    <td>{{ $home->price_home }}</td>
                    <td>{{ $home->reserve_home }}</td>
                    <td>{{ $home->datereserve_home }}</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.destroy', ['id' => $home->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.create') }}" class="btn btn-success">Add New Home</a>
    </div>
</body>

</html>

@endsection