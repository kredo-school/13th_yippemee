@extends('layouts.app')

@section('title', 'Bucket Lists')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')
    @include('users.bucket.body')
@endsection
