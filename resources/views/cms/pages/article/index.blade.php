@extends('cms.layouts.main')

@section('cms-content')

    @include('cms.components.header')

    @include('cms.components.sidebar')

    <main class="main" id="main">

        <div class="pagetitle">
            <h1>List of Article</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">List of Article</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Table with hoverable rows -->
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($articles as $article)
                <tr class="align-middle">
                    <th scope="row">{{ $no++ }}</th>
                    <td class="text-truncate" style="max-width: 300px;">{{ $article->title }}</td>
                    <td>{{ $article->is_active ? "Active" : "Deactive" }}</td>
                    <td>
                        <a href="{{ route('article.edit', $article->id) }}"><button type="button" class="btn btn-info d-inline"><i class="bi bi-info-circle"></i></button></a>
                        <form class="d-inline" action="{{ route('article.destroy', $article->id) }}" method="POST">
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