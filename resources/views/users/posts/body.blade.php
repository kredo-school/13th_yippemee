{{-- @if (isset($social_posts) && $social_posts->count() > 0)
    <div class="col-9">
        <div class="row delete_display_flex">
            @foreach($social_posts as $social_post)
            @if($social_post->user_id == Auth::id())
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="post">
                        <div class="card border-0">
                            @include('social.contents.body', ['id' => $social_post->id])
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@else
    <div class="col-9">
        <p>No posts to display.</p>
    </div>
@endif --}}

@if (isset($social_posts) && $social_posts->count() > 0)
    <div class="col-9">
        <div class="row delete_display_flex">
            @foreach($social_posts as $social_post)
            @if($social_post->user_id == Auth::id())
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="post">
                        <div class="card border-0">
                            <div class="container p-0 bg-white">
                                <a href="{{ route('social.posts.show', $social_post->id) }}">
                                    <img src="{{ $social_post->image }}" alt="{{ $social_post->image }}" class="w-100">
                                </a>
                                <div class="card-header border-0 header-padding">
                                    <div class="row mx-1">
                                        <div class="col-auto text-secondary small" style="opacity: 0.6;">
                                            <strong>at: </strong>
                                            &nbsp;
                                            <a href="#" class="text-decoration-none text-post">{{ $social_post->restaurant_name }}</a>
                                        </div>
                                        @include('social.contents.genre', ['id' => $social_post->id])
                                    </div>
                                </div>
                                <div class="card-body body-padding">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            @if($social_post->isLiked())
                                                <form action="{{ route('social.posts.unlike', $social_post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm shadow-none ps-0 like-button"><i class="fa-solid fa-heart text-danger"></i></button>
                                                    @if($social_post->likes->count() > 0)
                                                        <button type="button" class="btn shadow-none ps-0" data-bs-toggle="modal" data-bs-target="#likes-modal-{{ $social_post->id }}">{{ $social_post->likes->count() }}</button>
                                                    @endif
                                                </form>
                                            @else
                                                <form action="{{ route('social.posts.like', $social_post->id) }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="like-button"><i class="fa-regular fa-heart"></i></button>
                                                    @if($social_post->likes->count() > 0)
                                                        <button type="button" class="btn shadow-none ps-0 like-button" data-bs-toggle="modal" data-bs-target="#likes-modal-{{ $social_post->id }}">{{ $social_post->likes->count() }}</button>
                                                    @endif
                                                </form>
                                            @endif
                                            @include('social.posts.modal.likes')
                                        </div>
                                        <div class="col" style="padding: 0">
                                            @if($social_post->iswanted())
                                                <form action="{{ route('social.contents.want.destroy', $social_post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm shadow-none want-button"><i class="fa-solid fa-utensils text-success"></i></button>
                                                    @if($social_post->wants->count() > 0)
                                                        <button type="button" class="btn shadow-none" data-bs-toggle="modal" data-bs-target="#wants-modal-{{ $social_post->id }}">{{ $social_post->wants->count() }}</button>
                                                    @endif
                                                </form>
                                            @else
                                                <form action="{{ route('social.contents.want', $social_post->id) }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="want-button"><i class="fa-solid fa-utensils text-secondary"></i></button>
                                                    @if($social_post->wants->count() > 0)
                                                        <button type="button" class="btn shadow-none ps-0 want-button" data-bs-toggle="modal" data-bs-target="#wants-modal-{{ $social_post->id }}">{{ $social_post->wants->count() }}</button>
                                                    @endif
                                                </form>
                                            @endif
                                            @include('social.posts.modal.wants')
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="{{ route('social.posts.edit', $social_post->id) }}" class="dropdown-item">
                                                        <i class="fa-solid fa-pen-to-square text-post"></i> Edit
                                                    </a>
                                                    <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#delete-post-{{ $social_post->id }}">
                                                        <i class="fa-solid fa-trash-can"></i> Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col text-start">
                                            <i class="fa-solid fa-circle-user"></i>
                                            <a href="#" class="text-decoration-none text-post"><strong>{{ $social_post->user->name }}</strong></a>
                                            &nbsp;
                                            <div class="bucketScroll"><p class="d-inline fw-light text-post">{{ $social_post->description }}</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('social.posts.modal.status')
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@else
    <div class="col-9">
        <p>No posts to display.</p>
    </div>
@endif
