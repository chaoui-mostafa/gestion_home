@section('title', 'Show')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .page-banner {
        background-color: black;
        color: white;
    }

    .page-banner .header-text h2 em {
        color: white;
    }

    .footer {
        background-color: black;
        color: white;
    }

    .card-body {
        text-align: center;
    }

    .card-body img {
        width: 500px;
        height: 300px;
        object-fit: cover;
        display: block;
        margin: 0 auto;
    }
</style>
<div class="page-banner change-name">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="header-text text-center">
                    <h2><em>SHOW DETAILS</em></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5" style="width: 500px; border-radius: 5px;">
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <img src="{{ asset('storage/' . $home->image_home) }}" alt="{{ $home->title }}" class="img-fluid">
            </div>
            <p class="mb-2"><strong>Category:</strong> {{ $home->category_home }}</p>
            <p class="mb-2"><strong>Type:</strong> {{ $home->type_id }}</p>
            <p class="mb-2"><strong>Ville:</strong> {{ $home->ville_id }}</p>
            <p class="mb-2"><strong>Price:</strong> {{ $home->price_home }}$</p>
            <p class="mb-2"><strong>Reserve:</strong> {{ $home->reserve_home }}</p>
            <p class="mb-2"><strong>Date Reserve:</strong> {{ $home->datereserve_home }}</p>
            <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Contact Us Now</a>
        </div>
    </div>
</div>