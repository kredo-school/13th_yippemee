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
    