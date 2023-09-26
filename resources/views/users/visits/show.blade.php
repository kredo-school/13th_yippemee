@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('users.profile.header')

{{-- Visits --}}

        @include('users.visits.body')

{{-- End of Visits --}}

@endsection

