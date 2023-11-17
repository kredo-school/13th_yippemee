<div class="modal fade" id="delete-visits-{{ $visit->id }}">
    <div class="modal-dialog">
        <div class="modal-content border-danger modal-delete-visit">
            <div class="modal-header border-danger">
                <div class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete review
                </div>
            </div>

            <div class="modal-body">
                <p class="fw-bold text-secondary">Are you sure you want to delete this review?</p>
                <div class="mt-3">
                    <img src="{{ $visit->image }}" alt="{{ $visit->id }}" class="img-size">
                    <p class="mt-1 text-muted"></p>
                </div>
            </div>

            <div class="modal-footer border-0 text-center">
                <form action="{{ route('visits.destroy', $visit->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-outline-danger btn-md" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-danger btn-md">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
