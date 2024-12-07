@extends('cms.layouts.main')

@section('cms-content')
    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Add New Article</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Add New Article</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Multi Columns Form -->
        <form class="row g-3" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="title_article" class="form-label">Title</label>
                <input type="text" class="form-control" name="title_article" id="title_article">
            </div>
            <div class="col-md-6">
                <label for="slug_article" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug_article" id="slug_article" readonly>
            </div>
            <div class="col-md-6">
                <label for="thumbnail_article" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" id="thumbnail_article" name="thumbnail_article">
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status Article</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="status" type="checkbox" id="status" checked>
                    <label class="form-check-label" for="status">Active</label>
                </div>
            </div>
            <div class="col-12">
                <label for="content" class="mb-2">Content</label>                  
                <!-- TinyMCE Editor -->
                <textarea class="tinymce-editor" name="content">
                </textarea><!-- End TinyMCE Editor -->
            </div>

            <div class="mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary" class="submit-article">Submit Article</button>
            </div>
        </form><!-- End Multi Columns Form -->

    </main>

    @include('cms.components.footer')
@endsection