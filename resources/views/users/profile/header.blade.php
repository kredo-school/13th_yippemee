<style>
.col-12 {font-family: 'Mulish';}

</style>

{{-- Header --}}
<div class="row bg-white container ms-auto me-auto mb-3 shadow rounded-3 p-5w">
    <div class="col-5 mb-3 mt-3">
            <i class="fa-regular fa-circle-user icon-md d-block text-end"></i>
    </div>

    <div class="col-5">
        <div class="row">
            <div class="col-auto">
                <div class="display-6 mt-3">{{ "John Smith" }}
                    <!-- Modal Button -->
                    <a href="#" class="btn-sm mb-3 ms-3">
                        <i class="fa-solid fa-pen-clip icon-sm" data-bs-toggle="modal" data-bs-target="#edit-intro"></i>
                    </a>
                </div>

                {{-- Include Modal --}}
                @include('users.profile.modals.edit')
            </div>
        </div>

        <div class="row mb-3">
            <div class="mt-0">{{"@JohnSmith12345678"}}</div>
        </div>
        <div class="row mb-4"></div>
    </div>
        <div class="col-12">
            <div class="row justify-content-center me-5">
                <div class="col-auto"><h4><a href="#" class="text-decoration-none">Post</a></h4></div>
                <div class="col-auto"><h4><a href="#" class="text-decoration-none">Vists</a></h4></div>
                <div class="col-auto"><h4><a href="#" class="text-decoration-none">Bucket Lists</a></h4></div>
                <div class="col-auto"><h4><a href="#" class="text-decoration-none">Schedule</a></h4></div>
                <div class="col-auto"><h4><a href="#" class="text-decoration-none">Groups</a></h4></div>
            </div>
        </div>
    </div>
{{-- End of header --}}

{{-- INTRO --}}
<div class="row bg-white container ms-auto me-auto shadow rounded-3 p-5w">
    <div class="col-3 mb-3 mt-3">
        <div class="row bg-white ms-auto me-auto shadow rounded-3 p-5w">
            <h4 class="fw-bold mt-2 mb-4">intro</h4>
                {{-- LIVE --}}
                <a href="#" class="btn-sm mb-3 ms-3 text-decoration-none">
                    <i class="fa-solid fa-house" data-bs-toggle="modal" data-bs-target="#edit-intro"></i> Live
                </a>

                {{-- Restaurant --}}
                <a href="#" class="btn-sm mb-3 ms-3 text-decoration-none">
                    <i class="fa-solid fa-utensils" data-bs-toggle="modal" data-bs-target="#edit-intro"></i> Best restaurant
                </a>
                {{-- Genre --}}
                <a href="#" class="btn-sm mb-3 ms-3 text-decoration-none">
                    <i class="fa-solid fa-pizza-slice" data-bs-toggle="modal" data-bs-target="#edit-intro"></i> Favorite Genre
                </a>
                {{-- Introductiom --}}
                <a href="#" class="btn-sm mb-3 ms-3 text-decoration-none">
                    <i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#edit-intro"></i> Write about yourself
                </a>
        </div>
    </div>
{{-- END of Intro--}}
