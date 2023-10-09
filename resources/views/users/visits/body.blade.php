{{-- Picture --}}
<div class="col-9 visit_body_line">
    <div class="row">
        <div class="col-4 ms-3 mb-3 mt-3">
            <img src="{{ asset('img/image.jpg') }}" alt="logo" class="w-100">
        </div>
        <div class="visit-show col-7 me-auto">
            <div class="row">
                <div class="col-10 mt-3">
                    <h4 class="fw-bold">Bistro Adrian's Restaurant</h4>
                </div>
                {{-- Modal Delete or Edit--}}
                <div class="col-2">
                    <div class="dropdown mt-3">
                        <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <div class="dropdown-menu">
                        {{-- Modal Button --}}
                         <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit-visits"></i> Edit
                        </a>
                        <a href="#" class="dropdown-item text-danger">
                            <i class="fa-regular fa-trash-can" data-bs-toggle="modal" data-bs-target="#delete-visits"></i> Delete
                        </a>
                        </div>
                        {{-- Include Modal here --}}
                        @include('users.visits.modals.delete')
                        {{-- Include Modal --}}
                        @include('users.visits.modals.edit')
                    </div>
                </div>
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
