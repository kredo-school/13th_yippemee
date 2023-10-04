<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="modal fade" id="delete-bucket">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <div class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Bucket List
                </div>
            </div>

            <div class="modal-body">
                <p>Are you sure you want to delete the list?</p>
                <div class="mt-3">
                    <img src="{{ asset('img/R.jpg') }}" alt="logo" class="w-100">
                    <p class="mt-1 text-muted"></p>
                </div>
            </div>

            <div class="modal-footer border-0">
                <form action="#" method="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <input type="button" class="btn btn-danger btn-sm" onclick="delete_visits()" id="delete_bucket" value="delete">
                    {{-- <button class="btn btn-danger btn-sm" onclick="delete_visits()" id="delete_visits">Delete</button> --}}
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
