@extends('layouts.app')

@section('title', 'Social_Home')

@section('content')

<div class="container custom-margin m-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="post_title">New Post</h1>
            <span class="bar mt-4 mb-5"></span>
        </div>
    </div>
    <div class="row gx-4 mb-5">
        <div class="col-3">
            <div class="card border-0">
                @include('social.contents.body')
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0"> 
                @include('social.contents.body')
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0">
                @include('social.contents.body')
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0">
                @include('social.contents.body')
            </div>
        </div>
    </div>
    <div class="row gx-5 mb-5">
        <div class="col-3">
            <div class="card border-0">
                @include('social.contents.body')
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0"> 
                @include('social.contents.body')
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0">
                @include('social.contents.body')
            </div>
        </div>
        <div class="col-3">
            <div class="card border-0">
                @include('social.contents.body')
            </div>
        </div>
    </div>

    

    
</div>

@endsection
