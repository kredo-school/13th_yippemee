@extends('layouts.app')

@section('title', 'post restaurant')

@section('content')

<div class="container mx-auto w-25">
    <h2 class="text-center mt-5">Post restuarnt</h2>
    <hr class="w-25 mx-auto mb-5">
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="name">Restaurant Name</label>
        <input type="text" class="form-control mt-1" required>
        <label for="area" class="mt-3">Area</label>
        <input type="text" class="form-control ">
        <label for="address" class="mt-3">Address</label>
        <input type="text" class="form-control ">
        <label for="phone" class="mt-3">Tel </label>
        <input type="number" class="form-control ">
        <label for="description" class="mt-3">Description</label>
        <textarea name="description" id="description" rows="3" class = "form-control"></textarea>

        
        <div class="row mt-5 mb-3">
            <div class="col-md">
                <form>
                    <div class="form-group">
                        <label>Open hours</label>
                        <br>
                        <table>
            <tr>
                <td> <label class="form-check-label me-5">・Monday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
            <tr>
                <td> <label class="form-check-label">・Tuesday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
            <tr>
                <td> <label class="form-check-label">・Wednesday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
            <tr>
                <td> <label class="form-check-label">・Thursday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
            <tr>
                <td> <label class="form-check-label">・Friday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
            <tr>
                <td> <label class="form-check-label">・Saturday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
            <tr>
                <td> <label class="form-check-label">・Sunday</label></td>
                <td><input type="time" id="appt" name="appt"  /></td>
            </tr>
        </table>
                    </div>
                </form>
            </div>
        </div>

        <label for="url" class="mt-3">URL</label>
        <input type="text" class="form-control ">
        <label for="url" class="mt-3">Google map URL</label>
        <input type="text" class="form-control ">
       
        <label for="image" class=" mt-3 ">Image</label>
        <input type="file" name="image" id="image" class="form-control" aria-describedby="image-info">
        <div class="form-text" id="image-info">
            The acceptable formats are jpeg, jpg, png and gif only. <br>
            Max file size is 1048kb.
        </div>
        <div class="text-center mb-5">
            <button type="submit" class="btn btn-primary px-5 mt-3 "> Post</button>
        </div>
    </form>
</div>

@endsection