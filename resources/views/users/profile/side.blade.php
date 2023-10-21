{{-- side bar INTRO --}}
<div class="bg-white container ms-auto me-auto rounded-3 p-5w mt-3">
    <div class="row">
        <div class="col-3 mt-3">
            {{-- Intro --}}
            <nav id="sidebarMenu" class="sidebarMenu collapse d-lg-block sidebar collapse bg-white shadow ps-3 pt-2" style="padding-bottom: 20px">
                <div class="mx-3 sidebar-profile">
                    <div class="title-line"><i class="fa-regular fa-face-meh me-3 mt-3"></i><span class="fw-bold">Intro</span></div>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fa-solid fa-location-dot me-3 link-place" data-bs-toggle="modal" data-bs-target="#edit-intro"></i><span>Live</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
                    <i class="fa-solid fa-utensils me-3 link-place" data-bs-toggle="modal" data-bs-target="#edit-intro"></i><span>Best restaurant</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple mb-3"><i class="fa-solid fa-burger me-3 link-place" data-bs-toggle="modal" data-bs-target="#edit-intro"></i><span>Favorite Genre</span>
                    </a>
                </div>

                {{-- Post bar--}}
                <div class="mx-3 mt-4 sidebar-profile">
                    <div class="title-line"><i class="fa-regular fa-square-plus me-3"></i><span class="fw-bold">Make your page</span></div>
                    <a href="{{ route('social.posts.create') }}" class="list-group-item list-group-item-action py-2 ripple"><i class="fa-regular fa-pen-to-square me-3 link-place"></i><span>Post</span>
                    </a>
                    <a href="{{ route('visits.create') }}" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fa-solid fa-file-circle-check me-3 link-place"></i><span>Visits</span>
                    </a>
                    <a href="{{ route('bucket.create') }}" class="list-group-item list-group-item-action py-2 ripple"><i class="fa-solid fa-bucket me-3 link-place"></i><span>Bucket List</span>
                    </a>
                </div>
            </nav>
        </div>
