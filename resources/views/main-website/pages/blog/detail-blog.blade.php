@extends('layouts.main')

@section('main-content')
    @include('main-website.components.breadcrumb')
    <div class="section-detail-blog-1">
        <div class="wrapper">
            <img src="{{ ('/img/thumb-dummy.png') }}" alt="featured image">
        </div>
    </div>
    <div class="section-detail-blog-2">
        <div class="wrapper">
            <h1>Monthly Office Rental in Jakarta: Practical Solution For Bussiness</h1>
            <div class="meta-info">
                <p>By SaiCowork Team</p>
                <span>March 2nd, 2024</span>
            </div>
            <div class="content-blog">
                <p>
                    As the popularity of coworking spaces continues to rise, more and more
                    people are turning to these shared office environments to get work done.
                    Whether you're a freelancer, an entrepreneur, or a remote worker,
                    coworking spaces can offer a variety of benefits, including increased
                    productivity, networking opportunities, and a sense of community.
                    However, in order to truly make the most of your coworking experience,
                    it's important to know how to navigate these shared workspaces effectively.
                    In this blog post, we'll offer some tips for making the most of coworking
                    spaces, from choosing the right space to engaging with your fellow coworkers.
                </p>
            </div>
        </div>
    </div>
@endsection