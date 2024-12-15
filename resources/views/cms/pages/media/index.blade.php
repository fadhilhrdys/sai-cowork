@extends('cms.layouts.main')

@section('cms-content')

    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>List of Media</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">List of Media</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row row-cols-5">
                <div class="col pb-4">
                    <a href="{{ route('media.create') }}" class="w-100 h-100 bg-dark img-thumbnail d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <span class="text-white">Add New Media</span>
                    </a>
                </div>

                <div class="modal fade" id="verticalycentered" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add New Media</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-12 col-form-label">Category</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" name="category" aria-label="Default select example">
                                            <option selected>Choose category</option>
                                            <option value="gallery">Gallery</option>
                                            <option value="city">City</option>
                                            <option value="place">Place</option>
                                            <option value="workspace">Workspace</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-12 col-form-label">File Upload</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" name="image" type="file" id="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alt_image" class="col-sm-12 col-form-label">Alt Image</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="alt_image" id="alt_image" class="form-control">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                </div><!-- End Vertically centered Modal-->

                {{-- this col below for looping image --}}
                @forelse($medias as $media)
                    <div class="col pb-4 media-image">
                        <form onsubmit="return confirm('Are you sure for delete this media?');" action="{{ route('media.destroy', $media->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="bi bi-trash"></i></button>
                        </form>
                        <img class="img-thumbnail" src="{{ asset($media->content_file) }}">
                    </div>
                @empty
                    <span>not found data</span>
                @endforelse
            </div>
        </section>

    </main>

    @include('cms.components.footer')
    
@endsection