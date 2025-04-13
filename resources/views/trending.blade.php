@extends('layout')

@section('content')

<div class="page-banner change-name">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="header-text">
                    <h2><em>Check</em> Trending Work</h2>
                    <p>From here you can choose a house to rent or buy with all the specifications that you like, sir.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="trending-page">
    <div class="container expanded">
        <div class="col-lg-12">
            <div class="row grid">
                <div class="grid-sizer"></div>
                @foreach($trendingHomes as $item)
                <div class="grid-item">
                    <div class="trending-item">
                        <div class="thumb">
                            <span class="banner" name="type_id">{{ $item->type_id }}</span>
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <a href="{{ route('show', $item->id) }}">
                                        <h4>SHOW DETAILS</h4>
                                    </a>
                                    <a class="icon" href="explore.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <img src="{{ asset('storage/' . $item->image_home) }}" alt="{{ $item->type_id }}" class="card-img-top">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Hire us to Work on a Project?</h2>
            </div>
            <div class="col-lg-4">
                <div class="white-button">
                    <a href="{{ route('contact') }}">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('title', 'TRENDING')
