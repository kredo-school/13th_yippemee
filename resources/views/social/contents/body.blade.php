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

<div class="modal fade" id="delete-post-{{ $social_post->id }}" tabindex="-1" role="dialog" aria-labelledby="hiddenModal"
aria-hidden="true">

    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-activate m-4">Delete Post</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">

                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <span><i class="fa-solid fa-trash-can fa-3x icon-red"></i></span>
                    <p class="pt-3 pr-2">Are you sure to want to delete this post?</p>
                </div>

                <div class="mt-3">
                    <img src="{{ $social_post->image }}" alt="{{ $social_post->image }}" class="delete-post-img img-fluid">
                    <p class="mt-1 text-muted text-start px-3">{{ $social_post->description }}</p>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="{{ route('social.posts.destroy', $social_post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>
    </div>

</div>
