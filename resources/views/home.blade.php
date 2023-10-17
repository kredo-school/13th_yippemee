@extends('layouts.app')

@section('content')

<style>
    body {
        background-image:  url('/images/bg-mainpage.png');
        background-size: cover;
    }
</style>

 <div class="container display-flex align-items-center">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DASHBOARD') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('YOU ARE LOGGED IN!') }}
                </div>
            </div>
        </div> --}}

      <div class="card w-75 text-center homecard">
         <div class="mt-4">
            <h1 class="main-text display-4">Make a plan</h1>
            <p class="main-p1 h4">Let's have food together!</p>
         </div>
        <div class="row mt-3 mb-4">
         <div class="link-date col">
           <a href="{{ route('calendar') }}" class="link-date-icon">
            <i class="fa-solid fa-calendar-days fa-5x">
              <p class="main-p2 h4 mt-2">Decide by date</p>
            </i>
           </a>
         </div>
         <div class="link-place col">
            <a href="{{ route('group_list') }}" class="link-place-icon">
              <i class="fa-solid fa-map-location-dot fa-5x">
                <p class="main-p2 h4 mt-2">Decide by place</p>
              </i>
            </a>
         </div>
        </div>
      </div>
    </div>
 </div>
</div>
@endsection
