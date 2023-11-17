<div class="modal fade" id="#delete-bucket-{{ $bucket->id }}">
    <div class="modal-dialog">
        <div class="modal-content border-danger modal-delete-visit">
            <div class="modal-header border-danger">
                <div class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Bucket List
                </div>
            </div>

            <div class="modal-body">
                <p class="fw-bold text-secondary">Are you sure you want to delete this list?</p>
                <div class="mt-3">
                    <img src="{{ $bucket->image }}" alt="{{ $bucket->id }}" class="img-size">
                    <p class="mt-1 text-muted"></p>
                </div>
            </div>

            <div class="modal-footer border-0">
                <form action="{{ route('bucket.destroy', $bucket->id) }}" method="post">
                    @csrf
                    @method('delte')
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-danger btn-md">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
