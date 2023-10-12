{{-- Header --}}
<div class="row bg-white container shadow ms-auto me-auto mb-3 mt-4 rounded-3 p-5w">
    <div class="col-5 mb-3 mt-3 main-font">
            <i class="fa-regular fa-circle-user icon-md d-block text-end"></i>
    </div>

    <div class="main-font col-5">
        <div class="row">
            <div class="col-auto">
                <div class="display-6 mt-3">{{ "John Smith" }}
                    <!-- Modal Button -->
                    <a href="#" class="btn-sm mb-3 ms-3 icon-font">
                        <i class="fa-solid fa-pen-clip icon-sm link-place" data-bs-toggle="modal" data-bs-target="#edit-intro"></i>
                    </a>
                </div>

                {{-- Include Modal --}}
                @include('users.profile.modals.edit')
            </div>
        </div>

        <div class="header-user-name row">
                <div class="mt-0">{{"@JohnSmith12345678"}}</div>
        </div>
    </div>

    <nav class="stroke">
          <ul>
            <li><a href="{{ route('posts.show') }}">POST</a></li>
            <li><a href="{{ route('visits.show') }}">VISITS</a></li>
            <li><a href="{{ route('bucket.show') }}">BUCKET LIST</a></li>
            <li><a href="#">MY PLAN</a></li>
          </ul>
    </nav>
</div>
{{-- End of header --}}





