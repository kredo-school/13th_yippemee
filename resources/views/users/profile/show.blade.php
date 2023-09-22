@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    @include('users.profile.header')

{{-- Post --}}
    <div class="col-9">
        <h3 class="mt-5 text-center">No Posts Yet</h3>
    </div>
{{-- End of Post --}}
</div>

@endsection

