@extends('cms.layouts.main')

@section('cms-content')

    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>List of City</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">List of City</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-md-3">
                <input type="text" placeholder="search" class="form-control">
            </div>
            <div class="col-md-9 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary mx-2"><i class="bi bi-filter"></i></button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-plus-lg"></i> New City</button>
            </div>
        </div>

        <!-- modal new city -->
        <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add New City</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('city.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Name of City</label>
                            <div class="col-sm-12">
                                <input type="text" name="name_city" id="name_city" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="thumbnail_city" class="col-sm-12 col-form-label">File Upload</label>
                            <div class="col-sm-12">
                                <input class="form-control" name="thumbnail_city" type="file" id="thumbnail_city" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save City</button>
                </div>
                    </form>
              </div>
            </div>
        </div><!-- End Vertically centered Modal-->

        <!-- Table with hoverable rows -->
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">City</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @forelse ($cities as $city)
                    <tr class="align-middle">
                        <th scope="row">{{ $no++ }}</th>
                        <td><img style="width: 150px; height: 75px; object-fit:cover;" src="{{ asset($city->media->content_file) }}" alt=""></td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ route('city.edit', $city->id) }}"><button type="button" class="btn btn-info d-inline" data-bs-toggle="modal" data-bs-target="#show-city-modal"><i class="bi bi-info-circle"></i></button></a>
                            <form class="d-inline" action="{{ route('city.destroy', $city->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <p>data not found</p>
                @endforelse
            </tbody>
        </table>
        <!-- End Table with hoverable rows -->
    </main>

    @include('cms.components.footer')
    
@endsection