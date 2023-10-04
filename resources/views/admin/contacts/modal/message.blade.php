<!--user's message-->
<div class="modal fade" id="userMessage" tabindex="-1" role="dialog" aria-labelledby="userMessage"
aria-hidden="true">

    <div class="modal-dialog">
        <!--Content-->
        <div class="modal-content border-warning">

            <!--Header-->
            <div class="modal-header modal-warning">
                <p class="heading lead modal-title-contact">Message</p>
                <button type="button" class="btn-close btn-close-edit" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <!--Body-->
            <div class="modal-body border-0">
                <form action="#" method="post">
                    <div class="w-100 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-4">
                    <label for="message" class="col-form-label mt-3">Reply</label>
                    <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-warning btn-sm me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="reset" class="btn btn-warning btn-sm me-2">Reset</button>
                        <button type="submit" class="btn btn-warning btn-sm">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--delete message-->
<div class="modal fade" id="deleteMessage" tabindex="-1" role="dialog" aria-labelledby="deleteMessage"
aria-hidden="true">

    <div class="modal-dialog">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header modal-danger">
                <p class="heading lead modal-title-contact">Delete Message</p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><i class="fa-solid fa-trash-can fa-3x icon-red mb-4 "></i></span>
                <p class="text-width">Are you sure you want to delete <strong>"Username"</strong>'s message?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0">
                <form action="#" method="post">
                    <button type="submit" class="btn btn-danger btn-sm me-2">Delete</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                </form>

            </div>

        </div>

        <!--/.Content-->
    </div>

</div>
