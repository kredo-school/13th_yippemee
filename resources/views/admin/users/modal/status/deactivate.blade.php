<div class="modal fade" id="deactivateModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deactivateModal"
aria-hidden="true">

<div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Deactivate User</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <span>
                    @if ($user->avatar)
                    <img src="{{ $user->avatar }}" alt=" {{ $user->avatar }}"
                    class="rounded-circle d-block mx-auto avatar-md">
                @else
                    <i class="fa-solid fa-circle-user d-block text-center icon-md"></i>
                @endif
                </span>
                <p class="pt-3 pr-2">Are you sure to want to deactivate '{{ $user->name }}'?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0">
                <form action="{{ route('users.deactivate',$user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-lg">Deactivate</button>
                    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>

            </div>

        </div>

        <!--/.Content-->
    </div>

</div>

