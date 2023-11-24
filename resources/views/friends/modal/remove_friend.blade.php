<!-- views/friends/modal/disconnect_modal.php -->
<div class="modal fade" id="removeModal-{{ $friend_id }}" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Remove from friends list</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><img src={{ $friend->avatar }} alt={{ $friend->avatar }} class="d-block mu-auto profile-picture-modal"></i></span>
                <p class="pt-3 pr-2" id="removeMessage">Do you want to remove <span class="fw-bold">" {{ $friend->name }} "</span> from your friends list?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="{{ route('friends.remove', ['friend_id' => $friend_id]) }}" method="post" id="disconnectForm">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-lg me-3">Remove</button>
                    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>