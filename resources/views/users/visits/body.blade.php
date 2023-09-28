
    <div class="col-3 ms-auto mb-3 mt-3">
        <img src="{{ asset('img/image.jpg') }}" alt="logo" class="w-100">
    </div>

    <div class="col-4 me-auto">
        <div class="row">
            <h3><div class="col-12 mt-3 fw-bold">
                    {{ "Bistro Adrian's Restaurant" }}
                </div>
            </h3>
            <div class="mt-0 mb-0">{{ date('M d, Y') }}</div>
            <div class="mt-0 mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p class="d-inline fw-light">{{ "Write review here" }}</p>
        </div>
    </div>

        {{-- Modal Delete or Edit--}}
        <div class="col-auto mt-3">
            <div class="dropdown">
                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis"></i>
                </button>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">

                        {{-- Modal Button --}}
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-visits"></i> Edit
                        </a>

                        {{-- Include Modal --}}
                        @include('users.visits.modals.edit')


                        <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-visits">
                            <i class="fa-regular fa-trash-can"></i> Delete
                        </button>
                    </div>
                    {{-- Include Modal here --}}
                    @include('users.visits.modals.delete')
            </div>
        </div>

        {{-- Adjusting the layout --}}
        <div class="col-3 mb-3 mt-3"></div>

        {{-- 2nd Post --}}
        <div class="col-3 ms-auto mb-3 mt-3">
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
        </div>

            {{-- Modal Delete or Edit--}}
            <div class="col-auto mt-3">
                <div class="dropdown">
                    <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>

                        <div class="dropdown-menu">
                            {{-- Modal Button --}}
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-visits"></i> Edit
                        </a>

                            {{-- Include Modal --}}
                            @include('users.visits.modals.edit')


                            <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-visits">
                                <i class="fa-regular fa-trash-can"></i> Delete
                            </button>
                        </div>
                            {{-- Include Modal here --}}
                            @include('users.visits.modals.delete')
                </div>
            </div>



