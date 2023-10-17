@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<style>
    body {
        background-image:  url('/images/contact-bg.jpg');
        background-size: cover;
    }
</style>

    <div class="container display-flex align-items-center">
        <div class="row justify-content-center">
            <div class="card p-5 contact-form">
                <h1 class="text-center">CONTACT</h1>
                <label for="name" class="form-label mt-3">Username</label>
                <input type="text" class="form-control" id="name">
                <label for="email" class="form-label mt-3">Email</label>
                <input type="email" class="form-control" id="email">
                <label for="message" class="form-label mt-3">Message</label>
                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Leave us a message."></textarea>
                <div class="text-center">
                    <button type="submit" class="btn btn-contact w-25 mt-3">Send</button>
                </div>
            </div>
        </div>
    </div>

@endsection
