@extends('layouts.main')

@section('main-content')
    <div class="section-gallery-1">
        <div class="wrapper">
            <h1>gallery</h1>
            <div class="tabs">
                <div class="tab">
                    <h4>All</h4>
                    <h4 class="active">Workspace</h4>
                    <h4>Events</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="section-gallery-2">
        <div class="wrapper">
            <img src="{{ ('/img/gallery-1.jpg') }}" alt="">
            <img src="{{ ('/img/gallery-2.jpg') }}" alt="">
            <img src="{{ ('/img/gallery-3.jpg') }}" alt="">
            <img src="{{ ('/img/gallery-4.jpg') }}" alt="">
            <img src="{{ ('/img/gallery-5.jpg') }}" alt="">
            <img src="{{ ('/img/gallery-1.jpg') }}" alt="">
        </div>
    </div>
@endsection