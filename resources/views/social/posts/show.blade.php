@extends('layouts.app')

@section('title', 'Show Post')
    
@section('content')

<div class="row my-4">
    <div class="col page-title">
        <h2 class="text-center">Show Post</h2>
        <span class="bar bar-short mt-4"></span>
    </div>
</div>

<div class="container show-post">  
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row border shodow">
                <div class="col-7 p-0">
                    <img src="{{ $social_post->image }}" alt="{{ $social_post->image }}"  class="w-100">
                </div>

                <div class="col-5 bg-white show-socialpost">
                    <div class="card border-0">
                        <div class="card-header bg-white py-2 card_header-post">
                            <div class="row align-items-center">
                                <div class="col text-start">
                                    @if($social_post->user->avatar)
                                        <img src="{{ $social_post->user->avatar }}" alt="{{ $social_post->user->avatar }}" class="rounded-circle user-avatar">
                                    @else
                                        <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
                                    @endif
                                    <a href="{{ route('profile.show', ['id' => $social_post->user->id]) }}" class="text-decoration-none text-post"><strong>{{ $social_post->user->name }}</strong></a>
                                </div>
                                <div class="col-auto text-end"><i class="fa-solid fa-users text-success"></i></div>
                            </div>
                        </div>
                        <div class="card-body body-padding bg-white border-0 card_body-post">
                            <div class="row">
                                <div class="col text-start text-secondary small" style="opacity: 0.6;">
                                    <strong>at: </strong>
                                    &nbsp;
                                    <a href="#" class="text-decoration-none text-post">{{ $social_post->restaurant_name }}</a>
                                </div>
                                
                                @include('social.contents.genre', ['id' => $social_post->id])

                            </div>

                            @include('social.contents.profile_button', ['social_post' => $social_post])
                            
                            <div class="row">
                                <div class="col text-start">
                                    {{ $social_post->description }}
                                </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <div class="col text-start">
                                    <hr>
                                    @include('social.contents.comments', ['id' => $social_post->id])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>  
    </div>
    
</div>

@include('social.posts.modal.status')

@endsection


