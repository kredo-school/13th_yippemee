<div class="modal fade" id="visibleModal" tabindex="-1" role="dialog" aria-labelledby="visibleModal"
aria-hidden="true">
   
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-primary">
                <p class="heading lead modal-title-activate m-4">Unhide Post</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">

                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <span><i class="fa-solid fa-eye fa-3x icon-primary"></i></span>
                    <p class="pt-3 pr-2">Are you sure to want to unhide this Post?</p>
                </div>

                <div class="row pt-3 pr-2 d-flex flex-column align-items-center">
                    <p><img src="{{ asset('img/pizza.jpg') }}" alt="pizza" class="d-block mu-auto admin-post-img"></p>
                    <p>owner : Mike Smith</p>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="#" method="post">
                    <button type="submit" class="btn btn-primary btn-sm">Unhide</button>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>

