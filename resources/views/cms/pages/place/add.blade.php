@extends('cms.layouts.main')

@section('cms-content')

    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Add New Place</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Add New Place</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Multi Columns Form -->
        <form class="row g-3" action="{{ route('place.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="name_place" class="form-label">Name of Place</label>
                <input type="text" class="form-control @error('name_place') is-invalid @enderror" value="{{ old('name_place') }}" name="name_place" id="name_place" required>
                @error('name_place')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror                
            </div>
            <div class="col-md-6">
                <label for="city_place" class="form-label">City of Place</label>
                <select name="city_place" class="form-control" id="city_place" required>
                    <option value="">Choose city</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12">
                <label for="description_place" class="form-label">Description of Place</label>
                <textarea name="description_place" class="form-control" id="description_place" cols="30" rows="10" required></textarea>
            </div>
            <div class="col-md-12">
                <label for="address_place" class="form-label">Address</label>
                <textarea name="address_place" class="form-control" id="address_place" cols="30" rows="3" required></textarea>
            </div>

            <div class="col-md-4">
                <label for="latitude_place" class="form-label">Latitdue</label>
                <input type="text" class="form-control" value="{{ old('latitude_place') }}" name="latitude_place" id="latitude_place" required>
            </div>
            <div class="col-md-4">
                <label for="longtitude_place" class="form-label">Longtitude</label>
                <input type="text" class="form-control" value="{{ old('longtitude_place') }}" name="longtitude_place" id="longtitude_place" required>
            </div>
            <div class="col-md-4">
                <label for="opening_hours_place" class="form-label">Opening Hours</label>
                <input type="text" class="form-control" value="{{ old('opening_hours_place') }}" name="opening_hours_place" id="opening_hours_place" required>
            </div>

            <div class="col-md-12">
                <label for="amenities" class="form-label">Amenities</label>
                <select multiple data-placeholder="Choose Amenities" name="amenities[]" multiple id="amenities" required>
                    <option value="Wi-Fi">Wifi</option>
                    <option value="Chrome Cast">Chrome Cast</option>
                    <option value="White Board">White Board</option>
                    <option value="Spacious Parking Area">Spacious Parking Area</option>
                    <option value="Projector">Projector</option>
                </select>
            </div>
            <div class="col-md-12 mt-4">
                {{-- <input type="file" class="form-control" name="placemedia[]" multiple id="placemedia"> --}}
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label class="upload__btn">
                            + Upload Images (png,jpeg only max 2mb)
                            <input type="file" multiple name="medias[]" data-max_length="20" class="upload__inputfile">
                        </label>
                    </div>
                    <div class="upload__img-wrap"></div>
                </div>
            </div>

            <div class="mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary" class="submit-place">Add Place</button>
            </div>
        </form><!-- End Multi Columns Form -->

    </main>

    @include('cms.components.footer')
    
@endsection