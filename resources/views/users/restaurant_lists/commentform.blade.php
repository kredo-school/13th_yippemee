@extends('layouts.app')

@section('title', 'post restaurant')

@section('content')

<div class="container mx-auto w-25">
    <h2 class="text-center mt-5">Review restuarnt</h2>
    <hr class="w-25 mx-auto mb-5">
   
    <form action="#" method="post" enctype="multipart/form-data"> 
        <div class="rate-form mx-auto justify-content-center">
            <input id="star5" type="radio" name="rate" value="5">
            <label for="star5">★</label>
            <input id="star4" type="radio" name="rate" value="4">
            <label for="star4">★</label>
            <input id="star3" type="radio" name="rate" value="3">
            <label for="star3">★</label>
            <input id="star2" type="radio" name="rate" value="2">
            <label for="star2">★</label>
            <input id="star1" type="radio" name="rate" value="1">
            <label for="star1">★</label>
        </div>
        <label for="title">Title</label>
        <input type="text" class="form-control mt-1" required>
        <label for="description" class="mt-3">Description</label>
        <textarea name="description" id="description" rows="3" class = "form-control" plcaeholder="Please write a your experience or impression"></textarea>
       
        <label for="image" class=" mt-3 ">Image</label>
        <input type="file" name="image" id="image" class="form-control" aria-describedby="image-info">
        <div class="form-text" id="image-info">
            The acceptable formats are jpeg, jpg, png and gif only. <br>
            Max file size is 1048kb.
        </div>
    <div>

    <div>
    <label for="price" class=" mt-3 ">Price</label>
    <br>
    <div class="form-check form-check-inline mt-3">
        <input class="form-check-input" type="radio" id="inline_checkbox_1"  checked>
        <label class="form-check-label" for="inline_checkbox_1">$</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inline_checkbox_2">
        <label class="form-check-label" for="inline_checkbox_2">$$</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inline_checkbox_2">
        <label class="form-check-label" for="inline_checkbox_2">$$$</label>
    </div>
</div>

</div>
        <div class="text-center mb-5">
            <button type="submit" class="btn btn-primary px-5 mt-3 "> Post</button>
        </div>
    </form>
</div>

@endsection