@extends('layouts.app')

@section('title', 'Post')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')
    @include('users.posts.body')
@endsection
