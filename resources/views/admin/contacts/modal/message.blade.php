<!--user's message-->
<div class="modal fade" id="userMessage-{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="userMessage"
aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-contact modal-header-title">
                <p class="heading lead modal-title-font m-4">Message</p>
                <button type="button" class="btn-close btn-close-edit m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <!--Body-->
            <div class="modal-body border-0">
                <form action="#" method="post">
                    <div class="w-100 mb-2">
                        <textarea name="message" id="message" class="form-control" rows="5">{{ $contact ->message}}</textarea>
                    </div>
                    <div class="mb-4">
                    <label for="message" class="col-form-label mt-3">Reply</label>
                    <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <button type="button" class="btn btn-outline-warning me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="reset" class="btn btn-warning me-2">Reset</button>
                        <button type="submit" class="btn btn-warning me-2">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--delete message-->
<div class="modal fade" id="deleteMessage-{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteMessage"
aria-hidden="true">

    <div class="modal-dialog">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Delete Message</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span><i class="fa-solid fa-trash-can fa-3x icon-red mb-4 "></i></span>
                <p class="text-width">Are you sure you want to delete <strong>"{{ $contact->username }}"</strong>'s message?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0">
                <form action="{{ route('admin.contacts.destroy',$contact->id) }}" method="post">

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-lg me-2">Delete</button>

                </form>

                    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Cancel</button>


            </div>

        </div>

        <!--/.Content-->
    </div>

</div>
