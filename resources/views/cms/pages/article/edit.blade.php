@extends('cms.layouts.main')

@section('cms-content')
    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Edit Article</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('article.index') }}">List of Article</a></li>
                    <li class="breadcrumb-item active">Edit Article</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Multi Columns Form -->
        <form class="row g-3" action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="container-thumbnail">
                    <img class="thumbnail-edit-article" src="{{ asset($article->media->content_file) }}" alt="{{ $article->media->alt_image }}">
                    <div class="edit-thumbnail">
                        <label for="update_thumbnail" class="form-label">Add New Thumbnail</label>
                        <input class="form-control" type="file" id="update_thumbnail" name="update_thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="title_article" class="form-label">Title</label>
                <input type="text" class="form-control" name="title_article" id="title_article" value="{{ $article->title }}">
            </div>
            <div class="col-md-6">
                <label for="slug_article" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug_article" id="slug_article" value="{{ $article->slug }}" readonly>
            </div>
            <div class="col-12">
                <label for="content" class="mb-2">Content</label>                  
                <!-- TinyMCE Editor -->
                <textarea class="tinymce-editor" name="content">
                    {!! $article->content  !!}
                </textarea><!-- End TinyMCE Editor -->
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status Article</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="status" type="checkbox" id="status" @checked($article->is_active)>
                    <label class="form-check-label" for="status">Active</label>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary" class="submit-article">Update Article</button>
            </div>
        </form><!-- End Multi Columns Form -->

    </main>

    @include('cms.components.footer')
@endsection