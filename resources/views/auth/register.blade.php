@extends('layouts.app')

@section('content')

<style>
    body {
        padding-top: 4rem;
    }
</style>

<div class="background pt-5 text-start">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="img text-center mb-3">
                    <img src="/images/logo-black.png" alt="logo" class="w-50 ">
                </div>
                <div class="card">
                    <div class="card-title text-center mt-5 mb-5 h1 fw-bold">{{ __('Register') }}</div>

                    <div class="card-body w-75 mx-auto">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="name">
                                <label for="name" class="col-md-4 col-form-label ">{{ __('Name*') }}</label>

                                <div class="mb-3">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address*') }}</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="username">
                                <label for="username" class="col-md-4 col-form-label mt-2">{{ __('Username*') }}</label>

                                <div class="mb-3">
                                    <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="">
                                <label for="password" class="col-md-4 col-form-label ">{{ __('Password*') }}</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password*') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0 mt-3">
                                <div class="col-md-6 offset-md-4 hover-zoom">
                                    <button type="submit" class="btn btn-blue text-white ">
                                        {{ __('Create Account') }}
                                    </button>
                                </div>
                            </div>

                            <div class="row text-center mt-3">
                                <div class="col-md">Already have an account?<a href="{{ route('login') }}" class="ms-2">Log in</a></div>

                            <div class="row mt-4">
                                <div class="col"><hr></div>
                                <div class="col text-center">Or continue with</div>
                                <div class="col"><hr></div>
                            </div>

                            <div class="row text-center mb-2">
                                <div class="col-md"><a href="#"><img src="/images/google-icon.png" alt="" class="w-25"></a></div>
                                <div class="col-md"><a href="#"><i class="fa-brands fa-apple text-dark h2"></i></a></div>
                                <div class="col-md"><a href="#"><i class="fa-brands fa-facebook text-primary h2"></i></a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
