<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="modal fade" id="delete-visits">
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
                    <img src="{{ asset('img/image.jpg') }}" alt="logo" class="img-size">
                    <p class="mt-1 text-muted"></p>
                </div>
            </div>

            <div class="modal-footer border-0 text-center">
                <form action="#" method="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-danger btn-md" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-danger btn-md">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function delete_visits() {
  alert("I am an alert box!");
}
</script>
