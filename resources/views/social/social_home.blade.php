@extends('layouts.app')

@section('title', 'Social_Home')

@section('content')

<div class="container">
    <div class="social-home">
        <div class="row">
            <div class="col text-center">
                <h1 class="post_title mt-5">New Post</h1>
                <span class="bar mt-5 mb-5"></span>
            </div>
        </div>

        <div class="row mt-3">
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
