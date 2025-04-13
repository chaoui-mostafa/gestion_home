@extends('layout')
@section('content')


<body>
    <div class="loader">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
            </rect>
        </svg>
    </div>
    <div class="page-banner1 change-name" style=".page-banner1 {
  
  .your-class {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  padding: 100px 0px 90px 0px;
  text-align: center;
  background-color: rgba(46, 43, 43, 0); /* Fully transparent background */
}


}
@media (min-width: 768px) {
  .page-banner1 {
    padding: 180px 0px;
  }
}

.page-banner1 h2 {
  color: #ffffff;
  font-size: 36px;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 15px;
  margin-bottom: 25px;
}

@media (min-width: 768px) {
  .page-banner1 h2 {
    font-size: 50px;
  }
}

.page-banner1 h2 em {
  font-style: normal;
  color: #ff565b;
}

.page-banner1 p {
  color: #ffffff;
}

">

        <div class="container1">
            <video autoplay muted loop class="background-clip">
                <source src="assets/images/bac.mp4" type="video/mp4">
            </video>
            <div class="row" id="trr">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h6>WELCOME TO MY COMPANY</h6>
                        <h2><i></i></h2>
                        <div class="white-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="GET" role="search" action="{{ route('homes.search') }}">
                        <div class="row">
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="searchTitle" class="form-label">Search </label>
                                    <input type="text" name="searchTitle" class="searchText" placeholder="Type any work title..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="chooseCategory" class="form-label">Pick a category</label>
                                    <select name="category" class="form-select" aria-label="Default select example" id="chooseCategory">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->categorie_id }}">{{ $category->nom_category }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="chooseType" class="form-label">Pick a Type</label>
                                    <select name="type" class="form-select" aria-label="Default select example" id="chooseType">
                                        @foreach($types as $typ)
                                        <option value="{{ $typ->type_id }}">{{ $typ->nom_type }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="chooseVille" class="form-label">Pick a Ville</label>
                                    <select name="ville" class="form-select" aria-label="Default select example" id="chooseVille">
                                        @foreach($villes as $ville)
                                        <option value="{{ $ville->ville_id }}">{{ $ville->nom_ville }}</option>
                                        @endforeach
                                    </select>

                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button class="main-button">Search Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="explore-work" id="explore">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Explore Some Of Our Latest<br>
                            <em style="color: #086590;">Working in sales and rentals of villas and houses involves dealing with both the interior and exterior aspects of the properties</em>.
                        </h2>
                    </div>
                    <div class="oo">
                        <div class="div111">
                            <div class="image-container">
                                @foreach($homes as $foto) <!-- Corrected from $home to $homes -->
                                <div class="image-box">
                                    <img src="{{ asset('storage/' . $foto->image_home) }}" alt="Villa" class="img">
                                    <a href="{{ route('show', $foto->id) }}" class="overlay-text">
                                        show details
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whats-trending">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h2>Check Out Whats Trending In<br><em>Our Interior Work</em>.</h2>
                    </div>
                    <div class="left-content">
                        <p>The design interface and internal content of the house are designed to provide a harmonious and functional experience. The interior design is intended to reflect the style and preferences of the inhabitants while maximizing the use of available space. Materials and colors are carefully selected to create a welcoming and soothing ambiance. As for the content, the house is equipped with the latest technologies to ensure comfort, security, and energy efficiency. Smart home systems allow remote control of lighting, temperature, household appliances, and even security, offering an unparalleled level of convenience and peace of mind.</p>
                        <div class="primary-button">
                            <a href="{{ route('trending') }}">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-image">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <h4><a href="#">Modernized Interior</a></h4>
                                    <span>Guest Room Decoration</span>
                                </div>
                            </div>
                            <img src="assets/images/whats-trending-item-image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="explore-item">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Information about the site</h2>
                    </div>
                    <div class="main-image">
                        <img src="assets/images/home3.jpg" alt="master bedroom design" style="height: 900px;">
                    </div>
                    <div class="project-info">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="info-item">
                                    <h6>Coders:</h6>
                                    <span>B*M</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="info-item">
                                    <h6>number of customers:</h6>
                                    <span>66667</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="info-item">
                                    <h6>Terms:</h6>
                                    <span>6-12 Months</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="info-item">
                                    <h6>Project Type:</h6>
                                    <span>Selling and renting houses</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="info-item">
                                    <h6>Strategy:</h6>
                                    <span>Clean &amp; Minimal</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="info-item">
                                    <h6>Start date:</h6>
                                    <span>January 22, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Villas&Homes is your online destination to find the properties of your dreams, whether for luxury vacation rentals or purchasing a permanent residence. Our platform offers a vast selection of villas, vacation homes, cottages, and townhouses in sought-after destinations around the world.
                        <br><br>Whether you're looking for a luxury getaway, a second home, or an investment property, Villas&Homes is committed to providing you with a hassle-free and transparent experience to find the home of your dreams.
                        Please <a rel="nofollow" href="https://templatemo.com/contact" target="_blank">contact </a> website for more information. Thank you. <strong>For any questions or assistance, feel free to contact us via email at contact@villasandhomes.com or by phone at +XX XXX XXX XXXX.
                    </p>
                </div>
                <br>
                <div style="display: flex; ">
                    <div class="col-lg-6">
                        <img src="assets/images/villa5.jpg" alt="" style="padding-right: 3px;">
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/villa7.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="down-content">
                        <h4>Incredible Work</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto toril beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequida nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="projects-pagination">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-pagination">
                                    <img class="float-start" src="assets/images/pagination-left-image.jpg" alt="">
                                    <div class="right-content">
                                        <a href="explore.html">
                                            <h6>Minimalistic Living Room</h6>
                                        </a>
                                        <span>Interior Design</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-pagination">
                                    <img class="float-end" src="assets/images/pagination-right-image.jpg" alt="">
                                    <div class="float-end left-content">
                                        <a href="explore.html">
                                            <h6>Futuristic Interior Concept</h6>
                                        </a>
                                        <span>Interior Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h2>Don't be Hesitated<br><em>Talk to us</em> now!</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <input name="name" type="text" id="name" placeholder="First Name*" required="">
                            </div>
                            <div class="col-lg-6">
                                <input name="last-name" type="text" id="last-name" placeholder="Last Name*" required="">
                            </div>
                            <div class="col-lg-6">
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                            </div>
                            <div class="col-lg-6">
                                <input name="subject" type="text" id="subject" placeholder="Subject*" required="">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-lg-6 right-map">
                    <div id="map">


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="542px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Welcome to my company -></h2>
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
    @section('title' ,'Accueil')