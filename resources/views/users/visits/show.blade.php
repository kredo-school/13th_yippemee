@extends('layouts.app')

@section('title', 'Visits')

@section('content')
    @include('users.profile.header')
    @include('users.profile.side')
    @include('users.visits.body')
@endsection

