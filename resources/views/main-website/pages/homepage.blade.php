@extends('layouts.main')

@section('main-content')
    <div class="homepage-section-1">
        <div class="wrapper">
            <img src="{{ ('img/main-banner.png') }}" alt="sai cowork">
            <div class="wording">
                <h1>sai cowork</h1>
                <h2>Experience luxury and elegance in our exclusive space.</h2>
                <a href="http://"><button>Discover Now</button></a>
            </div>
        </div>
    </div>
    <div class="homepage-section-2">
        <div class="wrapper">
            <div class="col-left">
                <h4>about us</h4>
                <h2>Barrier-Free Creation Space</h2>
            </div>
            <div class="col-right">
                <p>
                    Sai Cowork is a service provider coworking and event space
                    spread across several big cities in Indonesia. Aims to facilitate
                    work flexibility and as a provider of multifunctional rooms
                    that can be used for various kinds of events including corporate
                    events, social events and others.
                </p>
                <p>
                    Sai Cowork is here to encourage collaboration for productive
                    people to support productivity and creativity by providing
                    space that can be used as needed.
                </p>
            </div>
        </div>
    </div>
    <div class="homepage-section-3">
        <div class="wrapper">
            <img src="{{ ('img/explore-space.png') }}" alt="co work space">
            <div class="col-text">
                <h2>Explore Spaces</h2>
                <p>
                    Our spacious, modern co working spaces are designed to foster
                    collaboration and innovation.
                </p>
                <p>
                    With 22 locations in multiple cities in Indonesia we have offices,
                    co working spaces, and meeting rooms in every major town, city,
                    and transport hub.
                </p>
                <a href="#"><button>Find My Space</button></a>
            </div>
        </div>
    </div>
    <div class="homepage-section-4">
        <div class="wrapper">
            <h2>Why Us?</h2>
            <div class="benefits">
                <div class="benefit">
                    <img src="{{ (('img/icon-dot.png')) }}" alt="coworking space">
                    <h4>Great accessibility, strategic location close to the city center</h4>
                </div>
                <div class="benefit">
                    <img src="{{ (('img/icon-dot.png')) }}" alt="coworking space">
                    <h4>Providing consumption services such as snacks / heavy meals</h4>
                </div>
                <div class="benefit">
                    <img src="{{ (('img/icon-dot.png')) }}" alt="coworking space">
                    <h4>Flexible operating hours</h4>
                </div>
                <div class="benefit">
                </div>
                <div class="benefit">
                </div>
                <div class="benefit">
                    <img src="{{ (('img/icon-dot.png')) }}" alt="coworking space">
                    <h4>Has excellent facilities to support your activities</h4>
                </div>
                <div class="benefit">
                    <img src="{{ (('img/icon-dot.png')) }}" alt="coworking space">
                    <h4>The Sai Cowork team will help you set up the room you need</h4>
                </div>
                <div class="benefit">
                    <img src="{{ (('img/icon-dot.png')) }}" alt="coworking space">
                    <h4>Lounge that can be used for various needs</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="homepage-section-5">
        <div class="wrapper">
            <h2>Our Service</h2>
            @include('main-website.components.card-products')
        </div>
    </div>
    <div class="homepage-section-6">
        <div class="wrapper">
            <div class="section-tenants">
                <h2>Trusted With The Best Companies</h2>
                <div class="tenants logo-slide">
                    <img class="logo" src="{{ ('img/logos/tenant-gamebliss.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/tenant-rtv.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/tenant-goto.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/tenant-daviena.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/tenant-creame.png') }}" alt="co working space">
                </div>
            </div>
            <div class="section-partners">
                <h2>Our Partners</h2>
                <div class="partners logo-slide">
                    <img class="logo" src="{{ ('img/logos/js-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/allo-spaces-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/dewaweb-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/property-pro-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/elevenia-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/stepnesia-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/krealogi-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/leo-legalitas-partner.png') }}" alt="co working space">
                    <img class="logo" src="{{ ('img/logos/tenant-gamebliss.png') }}" alt="co working space">  
                    <img class="logo" src="{{ ('img/logos/codero-partner.png') }}" alt="co working space">              
                </div>
            </div>
        </div>
    </div>
    <div class="homepage-section-7">
        <div class="wrapper">
            <h2>A Glimpse Inside</h2>
            <div class="galleries">
                <img class="hero-image" src="{{ ('img/gallery-1.jpg') }}" alt="co working space">
                <div class="wrapper">
                    <img src="{{ ('img/gallery-2.jpg') }}" alt="co working space">
                    <img src="{{ ('img/gallery-3.jpg') }}" alt="co working space">
                    <img src="{{ ('img/gallery-4.jpg') }}" alt="co working space">
                    <img src="{{ ('img/gallery-5.jpg') }}" alt="co working space">
                </div>
            </div>
            <a href="#">See another space <img src="{{ ('img/icon-arrow-right.png') }}" alt=""></a>
        </div>
    </div>
@endsection