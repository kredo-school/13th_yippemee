@extends('layouts.app')

@section('title', 'Social_Home')

@section('content')

<div class="container">
    <div class="container my-4 margin-container bg-white">
        <div class="row">
            <div class="col"></div>
            <div class="col  page-title">
                <h2 class="text-center " >New Post</h2>
                <span class="bar bar-short mt-4"></span>
            </div>
            <div class="col d-flex flex-column align-items-end">
                <a href="{{ route('social.posts.create') }}" class="btn btn-contact btn-post w-50"><i class="fa-solid fa-pen-to-square"></i> Post</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="post">
                    <div class="card border-0">
                        @include('social.contents.body')
                    </div>
                </div>
            </div>
        </div>    
    </div>

</div>

@endsection
