@extends('cms.layouts.main')

@section('cms-content')
    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Edit City</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('article.index') }}">List of Cities</a></li>
                    <li class="breadcrumb-item active">Edit City</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Multi Columns Form -->
        <form class="row g-3" action="{{ route('city.update', $city->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="container-thumbnail">
                    <img class="thumbnail-edit" src="{{ asset($city->media->content_file) }}" alt="{{ $city->media->alt_image }}">
                    <div class="edit-thumbnail">
                        <label for="update_thumbnail" class="form-label">Add New Thumbnail</label>
                        <input class="form-control" type="file" id="update_thumbnail" name="update_thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="name_city" class="form-label">Name</label>
                <input type="text" class="form-control" name="name_city" id="name_city" value="{{ $city->name }}">
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary" class="submit-article">Update Article</button>
            </div>
        </form><!-- End Multi Columns Form -->

    </main>

    @include('cms.components.footer')
@endsection