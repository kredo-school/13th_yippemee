@extends('layouts.app')

@section('title', 'Social_Home')

@section('content')

<div class="container">
    <div class="container my-4 margin-container bg-white">
        <div class="row">
            <div class="col d-flex flex-column align-items-start">
                <form action="{{ route('social.posts.search') }}" method="get" class="search-form">
                    <label class="form-control-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search"  placeholder="Search">
                    </label>
                </form>
            </div>
            <div class="col  page-title">
                <h2 class="text-center">New Post</h2>
                <span class="bar bar-short mt-4"></span>
            </div>
            <div class="col d-flex flex-column align-items-end">
                <a href="{{ route('social.posts.create') }}" class="btn btn-contact btn-post w-50"><i class="fa-solid fa-pen-to-square"></i> Post</a>
            </div>
        </div>
        @if($social_posts->count())
            <div class="row mt-5">
                @foreach($social_posts as $social_post)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="post">
                            <div class="card border-0">
                                @include('social.contents.body', ['id' => $social_post->id])
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div> 
        @else
            <p>No posts available.</p>
        @endif 
    </div>

</div>

@endsection
