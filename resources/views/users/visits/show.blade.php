@extends('layouts.app')

@section('title', 'Visits')

@section('content')
    @include('users.profile.header')

{{-- Visits --}}

        @include('users.visits.body')

{{-- End of Visits --}}

@endsection

