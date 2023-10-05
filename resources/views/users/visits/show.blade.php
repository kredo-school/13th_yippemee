@extends('layouts.app')

@section('title', 'Visits')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')

{{-- Visits --}}

        @include('users.visits.body')

{{-- End of Visits --}}

@endsection

