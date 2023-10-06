@extends('layouts.app')

@section('title', 'Post')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')

{{-- Bucket Lists --}}

        @include('users.posts.body')

{{-- End of Bucket Lists --}}






@endsection
