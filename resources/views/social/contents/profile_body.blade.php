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

        @include('social.contents.profile_button', ['social_post' => $social_post])
    
    </div>
</div>

@include('social.posts.modal.status')