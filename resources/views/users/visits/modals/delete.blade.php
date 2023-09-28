<div class="modal fade" id="delete-visits">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <div class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Visit
                </div>
            </div>

            <div class="modal-body">
                <p>Are you sure you want to delete the visit?</p>
                <div class="mt-3">
                    <img src="{{ "image" }}" class="image-lg">
                    <p class="mt-1 text-muted"></p>
                </div>
            </div>

            <div class="modal-footer border-0">
                <form action="{{ route('visits.destroy',1) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
