


<div style=" padding-top:400px ; width: 50%; margin-left: 30%;">
<form method="post" action="{{ route('home.update', ['id' => $homee->id]) }}" style="position: relative;" enctype="multipart/form-data">
    @csrf
    @method('put')
        <div class="row">
            <div class="col-lg-6">
                <label for="image_home">Image</label>
                <input type="file" name="image_home" id="image_home" class="form-control" value="{{('$homee->image_home')}}" accept="image/*">
            </div>
            @error('image_home')
            
            @enderror
            <div class="col-lg-6">
                <label for="category_home">Category:</label>
                <input value="{{('$homee->category_home')}}" type="text" id="category_home" name="category_home" class="form-control" required>
            </div>

            <div class="col-lg-6">
                <label for="type_home">Type:</label>
                <input value="{{('$homee->category_home')}}" type="text" id="type_home" name="type_home" class="form-control" required>
            </div>

            <div class="col-lg-6">
                <label for="ville_home">Ville:</label>
                <input value="{{('$homee->ville_home')}}" type="text" id="ville_home" name="ville_home" class="form-control" required>
            </div>

            <div class="col-lg-6">
                <label for="price_home">Price:</label>
                <input value="{{('$homee->price_home')}}" type="number" id="price_home" name="price_home" class="form-control" required>
            </div>

            <div class="col-lg-6">
                <label for="reserve_home">Reserve:</label>
                <select value="{{('$homee->reserve_home')}}" id="reserve_home" name="reserve_home" class="form-control" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="col-lg-6">
                <label for="datereserve_home">Reserve Date:</label>
                <input value="{{('$homee->datereserve_home')}}" type="date" id="datereserve_home" name="datereserve_home" class="form-control" required>
            </div>

            <button type="submit" class="main-button">Update</button>
        </div>

    </form>
</div>

