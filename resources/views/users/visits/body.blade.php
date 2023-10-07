{{-- Picture --}}
    <div class="col-4 ms-auto mb-3 mt-3">
        <img src="{{ asset('img/image.jpg') }}" alt="logo" class="w-100">
    </div>

    <div class="col-4 me-auto">
        <div class="row">
            <h3><div class="col-12 mt-3 fw-bold">
                    {{ "Bistro Adrian's Restaurant" }}
                </div>
            </h3>
            <div class="mt-0 mb-0">{{ date('M d, Y') }}</div>
            <div class="show-star mt-0 mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4><p class="d-inline fw-light">{{ "We enjoyed our meals here and our server was very nice and attentive. Prices are good too especially for Chicago. It’s a little noisy but it’s a pub so you have to expect some noise level. We would definitely go back" }}</p></h4>
        </div>
        
    </div>

        {{-- Modal Delete or Edit--}}
        <div class="col-auto mt-3">
            <div class="dropdown">
                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                    <h4><i class="fa-solid fa-ellipsis"></i></h4>
                </button>
                    <div class="dropdown-menu">
                        {{-- Modal Button --}}
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-visits"></i> Edit
                        </a>

                        <a href="#" class="dropdown-item text-danger">
                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-visits"></i> Delete
                        </a>

                        {{-- <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-visits">
                            <i class="fa-regular fa-trash-can"></i> Delete
                        </button> --}}
                    </div>
                    {{-- Include Modal here --}}
                    @include('users.visits.modals.delete')
                    {{-- Include Modal --}}
                    @include('users.visits.modals.edit')
            </div>
        </div>

        {{-- Adjusting the layout --}}
        {{-- <div class="col-3 mb-3 mt-3"></div> --}}
{{--

        {{-- 2nd Post --}}
        {{-- <div class="col-3 ms-auto mb-3 mt-3">
            <img src="{{ asset('img/mekisikan_1.jpg') }}" alt="logo" class="w-100">
        </div>

        <div class="col-4 me-auto">
            <div class="row">
                <h3><div class="col-12 mt-3 fw-bold">
                        {{ "Restaurant Saboten" }}
                    </div>
                </h3>
                <div class="mt-0 mb-0">{{ date('M d, Y') }}</div>
                <div class="mt-0 mb-3">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="d-inline fw-light">{{ "Write review here" }}</p>
            </div>
        </div> --}}

            {{-- Modal Delete or Edit--}}
            {{-- <div class="col-auto mt-3">
                <div class="dropdown">
                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>

                        <div class="dropdown-menu"> --}}
                            {{-- Modal Button --}}
                        {{-- <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-visits"></i> Edit
                        </a> --}}

                        {{-- 2nd modal --}}
                            {{-- <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-visits">
                                <i class="fa-regular fa-trash-can"></i> Delete
                            </button> --}}
                        {{-- </div> --}}
                            {{-- Include Modal here --}}
                            {{-- @include('users.visits.modals.delete') --}}
                            {{-- Include Modal --}}
                            {{-- @include('users.visits.modals.edit') --}}
                {{-- </div>
            </div> --}}



