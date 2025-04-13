@extends('layouts.SidBaar')

@section('title', 'admin.create')

@section('content_admin')
<div style="padding-top: 100px; width: 50%; margin: auto;">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #4CAF50; font-weight: bold;">Add New Home</h2>
    </div>
    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="image_home">Image</label>
                <input type="file" name="image_home" id="image_home" class="form-control" accept="image/*">
                @error('image_home')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="title_home">Title</label>
                <input type="text" name="title_home" id="title_home" class="form-control" value="{{ old('title_home') }}" placeholder="Enter title" style="background-color: white;">
                @error('title_home')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="categorie_id">Category</label>
                <select name="categorie_id" id="categorie_id" class="form-control">
                    <option value="" disabled selected>Select a category</option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->nom_category }}</option>
                    @endforeach
                </select>
                @error('categorie_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="type_id">Type</label>
                <select name="type_id" id="type_id" class="form-control">
                    <option value="" disabled selected>Select a type</option>
                    @foreach($types as $typ)
                        <option value="{{ $typ->id }}">{{ $typ->nom_type }}</option>
                    @endforeach
                </select>
                @error('type_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="ville_id">Ville</label>
                <select name="ville_id" id="ville_id" class="form-control">
                    <option value="" disabled selected>Select a ville</option>
                    @foreach($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->nom_ville }}</option>
                    @endforeach
                </select>
                @error('ville_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="price_home">Price</label>
                <input type="number" id="price_home" name="price_home" class="form-control" value="{{ old('price_home') }}" placeholder="Enter price" required style="background-color: white;">
                @error('price_home')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="reserve_home">Reserve</label>
                <select id="reserve_home" name="reserve_home" class="form-control" required>
                    <option value="not_reserved" {{ old('reserve_home') == 'not_reserved' ? 'selected' : '' }}>No</option>
                    <option value="reserved" {{ old('reserve_home') == 'reserved' ? 'selected' : '' }}>Yes</option>
                </select>
                @error('reserve_home')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="datereserve_home">Reserve Date</label>
                <input type="date" id="datereserve_home" name="datereserve_home" class="form-control" value="{{ old('datereserve_home') }}" placeholder="Select reserve date" style="background-color: white;">
                @error('datereserve_home')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-12 mt-3">
                <button type="submit" class="main-button btn btn-primary" style="width: 100%;">ADD</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('footer')
<footer class="footer" style="padding: 20px; text-align: center; position: fixed; bottom: 0; width: 100%; background-color: #f8f9fa;">
    <p>&copy; 2024 Your Company. All Rights Reserved.</p>
</footer>
@endsection
