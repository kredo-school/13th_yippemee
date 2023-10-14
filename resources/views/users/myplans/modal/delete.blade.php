<div class="modal fade" id="delete-plan">
    <div class="modal-dialog">
        <div class="modal-content border-danger"  style="height: 200px">
            <div class="modal-header border-danger">
                <div class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Plan
                </div>
            </div>

            <div class="modal-body">
                <p class="fw-bold text-danger">Are you sure you want to delete this plan?</p>
                <table class="table table-hover align-middle border">

                    <thead class="users-thead" style="background-color: #617EA8">
                        <tr>
                            <th class="fw-light">Date</th>
                            <th class="fw-light">Time</th>
                            <th class="fw-light">Restaurant</th>
                            <th class="fw-light">Group</th>
                            <th class="fw-light">Memo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ date('M d, Y') }}</td>
                            <td>6pm</td>
                            <td>Bristol Seafood Grill</td>
                            <td><a href="#">coworker</td>
                            <td>Welcome party</a></td>
                        </tr>
                    </tbody>
                </table>
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
