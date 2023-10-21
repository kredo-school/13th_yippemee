<div class="modal fade" id="group-delete" aria-hidden="true">
    <div class="modal-dialog delete-dialog modal-xl">
        <div class="modal-content delete-content">
            <div class="modal-header delete-header w-100">
                <div class="row w-100" >
                    <h1 class="mt-2 ms-3"><i class="fa-solid fa-trash-can" style="color: #253c5c;"></i> Delete this group</h1>
                </div>
            </div>
            <div class="modal-body delete-body">
                <div class="row">
                    <p>Are you sure you want to delete this group?</p>
                </div>
                <div class="row">
                    <img src="/images/people1.jpg" alt="people">
                </div>
                <div class="row">
                    <div class="group-name">Colleagues</div>
                </div>
            </div>
            <div class="modal-footer delete-footer bg-white border-0 mb-2">
                <form action="#" method="post">
                    <a href="{{route('group_list')}}" class="btn calncel-btn" data-bs-dismiss="modal">Cancel</a>
                    <button type="delete" class="btn g-delete-btn float-end">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

