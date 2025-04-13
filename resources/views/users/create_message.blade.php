@extends('layout')

@section('title', __('users.create_message'))

@section('content')
<div class="page-banner change-name">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="header-text">
                    <h2><em>{{ __('Contact') }}</em> {{ __('Us') }}</h2>
                    <p>{{ __('lorem_ipsum') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-page-map">
    <div class="container expanded">
        <div class="row">
            <div class="col-lg-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us-page">
    <div class="container">
        <div class="col-lg-12">
            <div class="contact-page-form">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <form id="contact" action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-heading">
                                        <h2>{{ __('dont_hesitate') }}<br><em>{{ __('send_message_now') }}</em>!</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">                 
                                    <input name="first_name" type="text" id="first-name" placeholder="{{ __('First Name*') }}" required>
                                    @error('first_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror             
                                </div>
                                <div class="col-lg-6">                
                                    <input name="last_name" type="text" id="last-name" placeholder="{{ __('Last Name*') }}" required>
                                    @error('last_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror           
                                </div>
                                <div class="col-lg-6">                       
                                    <input name="email" type="email" id="email" placeholder="{{ __('Your Email') }}" required>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror            
                                </div>
                                <div class="col-lg-6">                         
                                    <input name="phone_number" type="text" id="phone-number" placeholder="{{ __('Phone Number*') }}" required>
                                    @error('phone_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror           
                                </div>
                                <div class="col-lg-12">                           
                                    <textarea name="subject" class="form-control" id="subject" placeholder="{{ __('Subject') }}" required></textarea>
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror             
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="form-submit" class="main-button">{{ __('Send Message') }}</button>                            
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-info">
                            <ul>
                                <li>
                                    <div class="icon">('icons.location')</div>
                                    <h6>{{ __('Mailing Address') }}</h6>
                                    <span>Sunny Isles Beach, Florida 33160, USA</span>
                                </li>
                                <li>
                                    <div class="icon">('icons.email')</div>
                                    <h6>{{ __('Email Address') }}</h6>
                                    <span>contact@company.com</span>
                                </li>
                                <li>
                                    <div class="icon">('icons.chat')</div>
                                    <h6>{{ __('Chat With Us') }}</h6>
                                    <span>chat@company.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>{{ __('Hire us to Work on a Project?') }}</h2>
            </div>
            <div class="col-lg-4">
                <div class="white-button">
                    <a href="{{ route('trending') }}">{{ __('Show Us Now') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
