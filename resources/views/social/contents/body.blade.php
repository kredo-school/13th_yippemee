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
    
            <div class="col-auto ms-auto">
                <div class="badge bg-genre text-wrap">
                    Italian
                </div>
            </div>
        </div>
    </div>

    <div class="card-body body-padding">

        @include('social.contents.button', ['social_post' => $social_post])
    
        <div class="row align-items-center">
            <div class="col text-start">
                <i class="fa-solid fa-circle-user"></i>
                <a href="#" class="text-decoration-none text-post"><strong>{{ $social_post->user->name }}</strong></a>
                &nbsp;
                <p class="d-inline fw-light text-post">{{ $social_post->description }}</p>
            </div>
        </div>
    </div>
</div>

@include('social.posts.modal.status')