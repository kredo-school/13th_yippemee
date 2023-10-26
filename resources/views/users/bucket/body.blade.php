<div class="col-9">
    <div class="row">
        <div class="col-3 mt-3 mb-2 box-1">
            <div class="card" style="width: 18rem; text-align: left" >
                <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="">
                    <div class="card-body card-body-visit">
                        <div class="container row container-text-bucket">
                            <div class="col-10">
                            <h5 class="card-title fw-bold ps-0" style="text-align: left">Buenos Restaurant</h5>
                            </div>
                            <div class="col-2">
                                    <div class="dropdown">
                                        <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                            <div class="dropdown-menu">
                                                {{-- Modal Button --}}
                                                <a href="#" class="dropdown-item">
                                                    <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                                <a href="#" class="dropdown-item text-danger">
                                                    <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>
                                            </div>

                                            {{-- Include Modal here --}}
                                            @include('users.bucket.modals.delete')

                                            {{-- Include Modal --}}
                                            @include('users.bucket.modals.edit')
                                    </div>
                            </div>
                        </div>
                        <ul class="list-group bucketlist_body ms-3">
                        <li>Mexican</li>
                        <li>Mon–Fri 11:00am–10:00pm</li>
                        <li>Happy Hour,Non-Smoking</li>
                        <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button>
                            <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i></button>
                    </div>
            </div>
        </div>
{{-- end --}}

{{-- post2 --}}
<div class="col-3 mt-3 mb-2 box-2">
    <div class="card" style="width: 18rem; text-align: left" >
        <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="">
            <div class="card-body card-body-visit">
                <div class="container row container-text-bucket">
                    <div class="col-10">
                    <h5 class="card-title fw-bold ps-0" style="text-align: left">Buenos Restaurant</h5>
                    </div>
                    <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                    <div class="dropdown-menu">
                                        {{-- Modal Button --}}
                                        <a href="#" class="dropdown-item">
                                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                        <a href="#" class="dropdown-item text-danger">
                                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>
                                    </div>

                                    {{-- Include Modal here --}}
                                    @include('users.bucket.modals.delete')

                                    {{-- Include Modal --}}
                                    @include('users.bucket.modals.edit')
                            </div>
                    </div>
                </div>
                <ul class="list-group bucketlist_body ms-3">
                <li>Mexican</li>
                <li>Mon–Fri 11:00am–10:00pm</li>
                <li>Happy Hour,Non-Smoking</li>
                <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button>
                    <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i></button>
            </div>
    </div>
</div>
{{-- end --}}

{{-- post3 --}}
<div class="col-3 mt-3 mb-2 box-3">
    <div class="card" style="width: 18rem; text-align: left" >
        <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="">
            <div class="card-body card-body-visit">
                <div class="container row container-text-bucket">
                    <div class="col-10">
                    <h5 class="card-title fw-bold ps-0" style="text-align: left">Buenos Restaurant</h5>
                    </div>
                    <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                    <div class="dropdown-menu">
                                        {{-- Modal Button --}}
                                        <a href="#" class="dropdown-item">
                                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                        <a href="#" class="dropdown-item text-danger">
                                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>
                                    </div>

                                    {{-- Include Modal here --}}
                                    @include('users.bucket.modals.delete')

                                    {{-- Include Modal --}}
                                    @include('users.bucket.modals.edit')
                            </div>
                    </div>
                </div>
                <ul class="list-group bucketlist_body ms-3">
                <li>Mexican</li>
                <li>Mon–Fri 11:00am–10:00pm</li>
                <li>Happy Hour,Non-Smoking</li>
                <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button>
                    <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i></button>
            </div>
    </div>
    </div>
</div>

{{-- 2nd line --}}
<div class="row">
    <div class="col-3 mt-3 mb-2 box-1">
        <div class="card" style="width: 18rem; text-align: left" >
            <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="">
                <div class="card-body card-body-visit">
                    <div class="container row container-text-bucket">
                        <div class="col-10">
                        <h5 class="card-title fw-bold ps-0" style="text-align: left">Buenos Restaurant</h5>
                        </div>
                        <div class="col-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                        <div class="dropdown-menu">
                                            {{-- Modal Button --}}
                                            <a href="#" class="dropdown-item">
                                                <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                            <a href="#" class="dropdown-item text-danger">
                                                <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>
                                        </div>

                                        {{-- Include Modal here --}}
                                        @include('users.bucket.modals.delete')

                                        {{-- Include Modal --}}
                                        @include('users.bucket.modals.edit')
                                </div>
                        </div>
                    </div>
                    <ul class="list-group bucketlist_body ms-3">
                    <li>Mexican</li>
                    <li>Mon–Fri 11:00am–10:00pm</li>
                    <li>Happy Hour,Non-Smoking</li>
                    <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button>
                        <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i></button>
                </div>
        </div>
    </div>
    {{-- end --}}

    {{-- post2 --}}
    <div class="col-3 mt-3 mb-2 box-2">
        <div class="card" style="width: 18rem; text-align: left" >
            <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="">
                <div class="card-body card-body-visit">
                    <div class="container row container-text-bucket">
                        <div class="col-10">
                        <h5 class="card-title fw-bold ps-0" style="text-align: left">Buenos Restaurant</h5>
                        </div>
                        <div class="col-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                        <div class="dropdown-menu">
                                            {{-- Modal Button --}}
                                            <a href="#" class="dropdown-item">
                                                <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                            <a href="#" class="dropdown-item text-danger">
                                                <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>
                                        </div>

                                        {{-- Include Modal here --}}
                                        @include('users.bucket.modals.delete')

                                        {{-- Include Modal --}}
                                        @include('users.bucket.modals.edit')
                                </div>
                        </div>
                    </div>
                    <ul class="list-group bucketlist_body ms-3">
                    <li>Mexican</li>
                    <li>Mon–Fri 11:00am–10:00pm</li>
                    <li>Happy Hour,Non-Smoking</li>
                    <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button>
                        <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i></button>
                </div>
        </div>
    </div>
    {{-- end --}}

    {{-- post3 --}}
    <div class="col-3 mt-3 mb-2 box-3">
        <div class="card" style="width: 18rem; text-align: left" >
            <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="">
                <div class="card-body card-body-visit">
                    <div class="container row container-text-bucket">
                        <div class="col-10">
                        <h5 class="card-title fw-bold ps-0" style="text-align: left">Buenos Restaurant</h5>
                        </div>
                        <div class="col-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                        <div class="dropdown-menu">
                                            {{-- Modal Button --}}
                                            <a href="#" class="dropdown-item">
                                                <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-bucket"></i> Edit</a>

                                            <a href="#" class="dropdown-item text-danger">
                                                <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-bucket"></i> Delete</a>
                                        </div>

                                        {{-- Include Modal here --}}
                                        @include('users.bucket.modals.delete')

                                        {{-- Include Modal --}}
                                        @include('users.bucket.modals.edit')
                                </div>
                        </div>
                    </div>
                    <ul class="list-group bucketlist_body ms-3">
                    <li>Mexican</li>
                    <li>Mon–Fri 11:00am–10:00pm</li>
                    <li>Happy Hour,Non-Smoking</li>
                    <li><button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-square-check link-place"></i></button>
                        <button type="submit" class="btn btn-lg shadow-none ps-0"><i class="fa-solid fa-globe link-place"></i></button>
                </div>
        </div>
        </div>
    </div>

    </div>
