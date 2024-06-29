@extends('layouts.main')

@section('main-content')
    <div class="location-section-1">
        <div class="wrapper">
            <div class="col-img">
                <img class="img-location" src="{{ ('img/img-location.png') }}" alt="sai cowork">
                <img class="el-location" src="{{ ('img/el-location.png') }}" alt="sai cowork">
            </div>
            <div class="col-wording">
                <h2>the hub - where ideas meet action</h2>
                <p>
                    Our workspace is more than just a place to work — it's a hub
                    of inspiration and productivity. We offer flexible membership
                    options, modern amenities, and a supportive environment to
                    help you grow your business.
                </p>
                <a href="http://"><button>Action Now</button></a>
            </div>
        </div>
    </div>
    <div class="location-section-2">
        <div class="wrapper">
            <h2>Find Best Space For You</h2>
            <div class="cities">
                <div class="city">
                    <a href="">
                        <img src="{{ ('img/gallery-1.jpg') }}" alt="sai cowork jakarta">
                        <div class="wording">
                            <h3>Jakarta</h3>
                            <p>1 location</p>
                        </div>
                    </a>
                </div>
                <div class="city">
                    <a href="">
                        <img src="{{ ('img/gallery-2.jpg') }}" alt="sai cowork jakarta">
                        <div class="wording">
                            <h3>Semarang</h3>
                            <p>1 location</p>
                        </div>
                    </a>
                </div>
                <div class="city">
                    <a href="">
                        <img src="{{ ('img/gallery-3.jpg') }}" alt="sai cowork jakarta">
                        <div class="wording">
                            <h3>Bali</h3>
                            <p>1 location</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="location-section-3">
        <div class="wrapper">
            <h2>Amenities</h2>
            <div class="list">
                <ul>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Furniture (office desk, chair, whiteboard)</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Refrigerator</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Wi-Fi</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Cleaning Service</li>
                </ul>
                <ul>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Refreshment (mineral water, coffee, tea)</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Billiard</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Karoke</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Netflix</li>
                </ul>
                <ul>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Spacious parking area</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Longue</li>
                    <li><img src="{{ ('img/icon-dot.png') }}" alt="sai cowork">Utilities (AC, projector, electricity, water)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection