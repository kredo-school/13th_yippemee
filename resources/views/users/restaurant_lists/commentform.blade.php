@extends('layouts.app')

@section('title', 'post restaurant')

@section('content')

<div class="container mx-auto w-25">
    <h2 class="text-center mt-5">Review restuarnt</h2>
    <hr class="w-25 mx-auto mb-5">
   
    <form action="{{ route('comment.store', $restaurant->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf
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
        <input type="text" name="title" class="form-control mt-1" required>
        <label for="body" class="mt-3">Comment</label>
        <textarea name="body{{ $restaurant->id }}" id="body" rows="3" class="form-control" placeholder="Please write a your experience or impression"></textarea>
       
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
    

            <select name="price" id="price" class="form-control">
                <option value="$">$</option>
                <option value="$$">$$</option>
                <option value="$$$">$$$</option>          
            </select>
    </div>
</div>

</div>
        <div class="text-center mb-5">
            <button type="submit" class="btn btn-primary px-5 mt-3 "> Post</button>
        </div>
    </form>
</div>

@endsection