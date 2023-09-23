@extends('layouts.app')

@section('title', 'Your plan')

@section('content')
    <div class="container w-75 text-center yourplan mt-4">
    <p>&nbsp;</p>
        <div class="border border-white ms-5 me-5 mt-3 mb-3">
            <p>&nbsp;</p>
            <h2 class="h1  fw-bold mt-3 mb-3">--- Your Plan ---</h2>
            <img src="/images/cafe.png" alt="" class="yourplan-img rounded">
            <p class="h2 mt-5 mb-3"><u>12th September, 2023</u></p>
            <table class="table mb-5 mx-auto w-50 rounded noHover">          
                <tr>
                    <td class="w-25"><i class="fa-solid fa-utensils"></td>
                    <td class="w-75">Restaurant Name</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-clock"></td>
                    <td>2pm - 4pm</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-user me-1"></td>
                    <td>Group A</td>
                </tr>
                <tr class="mb-4">
                    <td class="mb-4"><i class="fa-solid fa-file me-1"></td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quia quibusdam itaque, illum repellendus similique, fuga corporis dolor laboriosam laudantium ipsam necessitatibus nam voluptate deserunt magni blanditiis culpa dolore recusandae.</td>
                </tr>
            </table>
            <div class="row mb-5">
                <button class="btn btn-lg btn-warning w-25 mx-auto mb-5 ">Back</button>
            </div>
        </div>
        <p>&nbsp;</p>
    </div>
@endsection