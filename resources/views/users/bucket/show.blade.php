@extends('layouts.app')

@section('title', 'Bucket Lists')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')

{{-- Bucket Lists --}}

        @include('users.bucket.body')

{{-- End of Bucket Lists --}}






@endsection
