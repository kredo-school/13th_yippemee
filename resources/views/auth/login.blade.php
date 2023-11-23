@extends('layouts.app')
@section('content')
<style>
    body {
        padding-top: 4rem;
    }
</style>
<div class="background">
    <div class="container text-start" >
        <div class="row justify-content-center mb-3 w-50 mx-auto">
                    <img src="/images/logo-black.png" alt="logo" class="w-50 pt-5 img  mb-3">
                <div class="card">
                    <div class="card-title text-center mt-5 mb-5 h1 fw-bold">{{ __('Login') }}</div>
                    <div class="card-body w-75 mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="email">
                                        <label for="email" class="col-md-4 col-form-label " >{{ __('Email Address') }}</label>
                                    <div class="mb-3">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                </div>
                            <div class="password">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <div class="mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4 mt-2 ">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-blue text-white w-50 ">
                                            {{ __('Login') }}
                                        </button>
                                </div>
                            </div>
                            <div class="row mb-0 ">
                                <div class="col-md">
                                        <a class="btn btn-link ps-0 " href="{{ route('register') }}">
                                            Create a account
                                        </a>
                                </div>
                                    @if (Route::has('password.request'))
                                    <div class="col-md text-end pe-0">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                    @endif
                            </div>
                            <div class="row mt-4">
                                <div class="col"><hr></div>
                                <div class="col text-center">Or continue with</div>
                                <div class="col"><hr></div>
                            </div>
                            <div class="row text-center mb-5">
                                <div class="col-md"><a href="{{ url('auth/google') }}"><img src="/resources/images/google-icon.png" alt=""><img src="/images/google-icon.png" alt="" class="w-25"></a></div>
                                <div class="col-md"><a href="#"><i class="fa-brands fa-apple text-dark h2"></i></a></div>
                                <div class="col-md"><a href="{{ url('auth/facebook') }}"><i class="fa-brands fa-facebook text-primary h2"></i></a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
