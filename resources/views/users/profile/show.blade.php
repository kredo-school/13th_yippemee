@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')
    @include('users.posts.body')


@endsection

