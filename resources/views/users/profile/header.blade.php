<div class="row bg-white container mx-auto mt-3" style="border-bottom: 3px solid lightgray">
    <div class="col-6 mb-3 mt-3">
        <i class="fa-regular fa-circle-user icon-md d-block text-end"></i>
    </div>

    <div class="col-3">
        <div class="mt-4" style="font-family: 'Marcellus';"><h2 style="margin-bottom: 0">{{ $user->name }}</h2>
        </div>
        <div class="header-user-name row">
        <div class="mt-0">{{ $user->username }}</div>
        </div>
    </div>

    <div class="col-3 mt-4" style="text-align: right">
        <a href="#" class="btn btn--green btn--cubic px-5">
            <i class="fa-solid fa-pen-clip icon-sm" data-bs-toggle="modal" data-bs-target="#edit-intro"></i> Edit Profile
        </a>
    </div>

        {{-- Include Modal --}}
        @include('users.profile.modals.edit')

        <div class="row">
            <div class="col page-title" style="margin-left: 200px">
                <span class="bar bar-short mt-2"></span>
            </div>
        </div>


    <nav class="sidebarMenu profile-nav stroke">
          <ul>
            <li><a href="{{ route('posts.show') }}">POST</a></li>
            <li><a href="{{ route('visits.show',$user->id) }}">VISITS</a></li>
            <li><a href="{{ route('bucket.show',$user->id) }}">BUCKET LIST</a></li>
            <li><a href="{{ route('myplans.show') }}">MY PLANS</a></li>
          </ul>
    </nav>
</div>
{{-- End of header --}}





