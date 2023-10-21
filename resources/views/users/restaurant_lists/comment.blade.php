@extends('layouts.app')

@section('title', 'Restaurant list')

@section('content')
<div class="w-75 mx-auto restaurant-list bg-white mb-5 text-start">
    <div class="container mt-5">
    <div class="row mt-5 pt-5 mb-5">
    </div>
    <div class="row ">
        <div class="col-md-4">
            <img src="/images/tokyo.jpg" alt="" class="rounded  " style="width:400px;">
        </div>
        <div class="col-md-8 float-left">
            <div class="row">
                <div class="col-md-8">
                    <a href="{{ url('/restaurant/detail') }}" class="h2">restaurant:name</a>
                </div>
                <div class="col-md-4">
                    Write Comment <a href="{{ url('/restaurant/comment/form') }}"><i class="fa-regular fa-comment-dots h2 ms-2"></i></a>
                    <i class="fa-solid fa-bookmark ms-4 text-end h2"></i>
                </div>         
                <p>[ Tokyo ] </p>
                <hr>
                <div class="rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                4.2 <i class="fa-regular fa-comment-dots ms-3"></i> <a href="{{ url('/restaurant/comment') }}">133 </a> <i class="fa-solid fa-bookmark ms-4"></i> 1236   <span class="ms-2">$$$</span>
                <br>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit expedita corporis iure ex impedit delectus itaque? Nostrum, laborum deleniti.</p>
                </div>
                
        </div>
          <hr class="mt-3">
    </div>
        <div class="serach">
            <div class="row mt-4">
                <div class="col d-flex mb-4" >
                    <input type="text" class="form-control w-50 ms-3"><button class="btn btn-primary ms-3"> Search</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="card bg-white mb-5">
            <div class="card-body">
                <div class="row ">
                    <div class="col-auto ms-2">
                        <img src="/images/tokyo.jpg" alt="" class="rounded-circle  avatar-md "          style=" width: 3.5rem;
                                    height: 3.5rem;
                                    object-fit: cover;" >
                    </div>
                    <div class="col ps-0 mt-4"><a href="" class="text-decoration-none text-dark ms-2">User name</a></div>
                </div>
                <div class="rate mt-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    4.2
                </div>
                <p>12 / 9 /2023</p>
                <p class="fw-bold"><u>Title : Lorem ipsum dolor sit.</u></p>
                <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis expedita neque? Culpa explicabo sed id aliquid? Voluptate consequuntur dolore reprehenderit cumque vel, iusto, perferendis quibusdam excepturi ut provident aliquid!
                </p>
                <div class="row">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                </div>
            </div>
        </div>

        <div class="card bg-white mb-5">
            <div class="card-body">
                <div class="row ">
                    <div class="col-auto ms-2">
                        <img src="/images/tokyo.jpg" alt="" class="rounded-circle  avatar-sm" 
                        style=" width: 3.5rem;
                                    height: 3.5rem;
                                    object-fit: cover;" >
                    </div>
                    <div class="col ps-0 mt-4"><a href="" class="text-decoration-none text-dark ms-2">User name</a></div>
                </div>
                <div class="rate mt-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    4.2
                </div>
                <p>12 / 9 /2023</p>
                <p class="fw-bold"><u>Title : Lorem ipsum dolor sit.</u></p>
                <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis expedita neque? Culpa explicabo sed id aliquid? Voluptate consequuntur dolore reprehenderit cumque vel, iusto, perferendis quibusdam excepturi ut provident aliquid!
                </p>
                <div class="row">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                </div>
            </div>
        </div>

        <div class="card bg-white mb-5">
            <div class="card-body">
                <div class="row ">
                    <div class="col-auto ms-2">
                        <img src="/images/tokyo.jpg" alt="" class="rounded-circle  avatar-sm" 
                        style=" width: 3.5rem;
                                    height: 3.5rem;
                                    object-fit: cover;" >
                    </div>
                    <div class="col ps-0 mt-4"><a href="" class="text-decoration-none text-dark ms-2">User name</a></div>
                </div>
                <div class="rate mt-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    4.2
                </div>
                <p>12 / 9 /2023</p>
                <p class="fw-bold"><u>Title : Lorem ipsum dolor sit.</u></p>
                <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis expedita neque? Culpa explicabo sed id aliquid? Voluptate consequuntur dolore reprehenderit cumque vel, iusto, perferendis quibusdam excepturi ut provident aliquid!
                </p>
                <div class="row">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                </div>
            </div>
        </div>

        <div class="card bg-white mb-5">
            <div class="card-body pb-4 mb-4">
                <div class="row ">
                    <div class="col-auto ms-2">
                        <img src="/images/tokyo.jpg" alt="" class="rounded-circle  avatar-sm" 
                        style=" width: 3.5rem;
                                    height: 3.5rem;
                                    object-fit: cover;" >
                    </div>
                    <div class="col ps-0 mt-4"><a href="" class="text-decoration-none text-dark ms-2">User name</a></div>
                </div>
                <div class="rate mt-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    4.2
                </div>
                <p>12 / 9 /2023</p>
                <p class="fw-bold"><u>Title : Lorem ipsum dolor sit.</u></p>
                <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa omnis expedita neque? Culpa explicabo sed id aliquid? Voluptate consequuntur dolore reprehenderit cumque vel, iusto, perferendis quibusdam excepturi ut provident aliquid!
                </p>
                <div class="row">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                    <img src="/images/tokyo.jpg" alt="" class="rounded" style="width: 200px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection