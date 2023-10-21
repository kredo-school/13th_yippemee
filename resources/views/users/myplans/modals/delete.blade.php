<div class="modal fade" id="delete-plan">
    <div class="modal-dialog">
        <div class="modal-content border-danger"  style="height: 300px">
            <div class="modal-header border-danger">
                <div class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Plan
                </div>
            </div>

            <div class="modal-body d-flex justify-content-center align-items-center flex-column">

                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <span><i class="fa-solid fa-calendar-xmark fa-3x icon-red"></i></span>
                    <p class="pt-3 pr-2">Are you sure to want to delete this plan?</p>
                </div>

                <div class="row pt-3 pr-2 d-flex flex-column align-items-center">
                    <p>Date : 2023:09:01</p>
                    <p>Time : 6pm</p>
                    <p>Place : Bristol Seafood Grill</p>
                    <p>Group : coworker</p>
                </div>

            </div>

            <div class="modal-footer border-0">
                <form action="#" method="post">
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
