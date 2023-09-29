@extends('layouts.app')

@section('content')

<div class="background-image">
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
      <div><br><br><br><br><br></div>

      <div class="card w-50 mt-5 text-center" style="background-color: rgba(230,242,233,0.75)">
         <div>
            <h1 class="main-text display-5" style="color: #253C5C;">Make a plan</h1>
            <p class="main-p1 h5" style="color: #617EA8;">Let's have food together!</p>
         </div>
        <div class="row mt-3">
         <div class="link-date col">
           <a href="#" class="link-date-icon"><i class="fa-solid fa-calendar-days fa-5x"></i>
           <p class="main-p2 h5 mt-2">Decide by date</p></a>
         </div>
         <div class="link-place col">
            <a href="#" class="link-place-icon"><i class="fa-solid fa-map-location-dot fa-5x"></i>
            <p class="main-p2 h5 mt-2">Decide by place</p></a>
         </div>
        </div>
      </div>
    </div>
 </div>
</div>
@endsection
