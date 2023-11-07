<div class="modal fade" id="hiddenModal-{{ $social_post->id }}" tabindex="-1" role="dialog" aria-labelledby="hiddenModal"
aria-hidden="true">

    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Hide Post</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">

                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <span><i class="fa-solid fa-eye-slash fa-3x icon-red"></i></span>
                    <p class="pt-3 pr-2">Are you sure to want to hide this Post?</p>
                </div>

                <div class="row pt-3 pr-2 d-flex flex-column align-items-center">
                    <p><img src="{{ $social_post->image }}" alt="{{ $social_post->image }}" class="d-block mu-auto admin-post-img"></p>
                    <p>owner : {{ $social_post->user->name }}</p>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="{{ route('admin.posts.hide', $social_post->id) }}" method="post">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-danger btn-lg">Hide</button>
                    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>



