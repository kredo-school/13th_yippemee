@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<link href="{{ asset('css/contact.css') }}" rel="stylesheet">

@csrf

    <div class="container display-flex align-items-center">
        <div class="row justify-content-center">
            <div class="card p-5 contact-form">
                <h1 class="text-center">CONTACT</h1>

                <form action="{{ route('contact.store') }}" method="post">

                @csrf

                <label for="message" class="form-label mt-3">Message</label>
                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Leave us a message."></textarea>
                <div class="text-center">
                    <button type="submit" name="btn_send" class="btn btn-contact w-25 mt-3">Send</button>
                </div>

                </form>

                @if(session('message'))
                <div class="alert alert-primary mt-2 text-center">{{session('message')}}</div>
                @endif

            </div>
        </div>
</div>

@endsection
