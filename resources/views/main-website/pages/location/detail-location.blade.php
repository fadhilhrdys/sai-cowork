@extends('layouts.main')

@section('main-content')
    @include('main-website.components.breadcrumb')
    <div class="detail-location-section-1">
        <div class="wrapper">
            <div class="row-title">
                <h1>Soho Capital, West Jakarta</h1>
                <div class="button-group">
                    <a href="http://"><button>Get Space</button></a>
                    <a href="http://"><button><img src="{{ ('img/icon-wa-cta.png') }}">WhatsApp Now</button></a>
                </div>
            </div>
            <div class="row-gallery">
                <div class="galleries-mobile">
                    <img src="{{ ('img/gallery-1.jpg') }}">
                    <img src="{{ ('img/gallery-2.jpg') }}">
                    <img src="{{ ('img/gallery-3.jpg') }}">
                </div>
                <div class="galleries-desktop">
                    <img class="hero-image" src="{{ ('img/gallery-1.jpg') }}" alt="co working space">
                    <div class="wrapper">
                        <img src="{{ ('img/gallery-2.jpg') }}" alt="co working space">
                        <img src="{{ ('img/gallery-3.jpg') }}" alt="co working space">
                        <img src="{{ ('img/gallery-4.jpg') }}" alt="co working space">
                        <img src="{{ ('img/gallery-5.jpg') }}" alt="co working space">
                    </div>
                </div>
                <a href="http://" class="btn-gallery"><button>View Gallery</button></a>
            </div>
        </div>
    </div>
    <div class="detail-location-section-2">
        <div class="wrapper">
            <div class="col-about">
                <h2>About Place</h2>
                <p>
                    A space with a more serious identity with a
                    modern-classic room design. These meeting spaces
                    located in West Jakarta, easy to reach by public
                    transportation, such as Trans Jakarta, KRL
                    commuter line, and even a regular bus.
                </p>
            </div>
            <div class="col-amenities">
                <h2>Amenities</h2>
                <ul>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Chrome Cast</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">White Board</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Wi-Fi</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Projector</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Free Flow Tea and Coffee (Self Sevice)</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Spacious Parking Area</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="detail-location-section-3">
        <div class="wrapper">
            <h2>Flexible Workspace Solution</h2>
            <div class="tab-title">
                <h4>Coworking</h4>
                <h4 class="tab-active">Meeting Room</h4>
                <h4>Event Space</h4>
                <h4>Private Office</h4>
            </div>
            <div class="tab-content">
                <div class="tab">
                    @include('main-website.components.card-products')
                </div>
            </div>
        </div>
    </div>
    <div class="detail-location-section-4">
        <div class="wrapper">
            <h2>Location</h2>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.674957570791!2d106.78715387452668!3d-6.174253493813094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f73add25d7ab%3A0x5c0265cf5e639bb5!2sSoho%20Capital!5e0!3m2!1sid!2sid!4v1719672387511!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="description-location">
                <div class="address">
                    <h5>Building Address</h5>
                    <h4>SAI Co Work Jakarta</h4>
                    <p>
                        SOHO Capital Jl. Letjen S. Parman No.Kav. 28
                        Jakarta Barat
                        Daerah Khusus Ibukota Jakarta, 11470
                    </p>
                </div>
                <div class="opening-hours">
                    <h5>Opening Hours</h5>
                    <p>09:00 AM - 06:00 PM | Monday - Friday</p>
                </div>
            </div>
        </div>
    </div>
@endsection