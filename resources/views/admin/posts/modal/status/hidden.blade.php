<div class="modal fade" id="hiddenModal" tabindex="-1" role="dialog" aria-labelledby="hiddenModal"
aria-hidden="true">

    <div class="modal-dialog">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header-danger modal-header-title">
                <p class="heading lead modal-title-font m-4">Hide Post</p>
                <button type="button" class="btn-close btn-close-white m-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!--Body-->
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">

                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <span><i class="fa-solid fa-eye-slash fa-3x icon-red"></i></span>
                    <p class="pt-3 pr-2">Are you sure to want to hide this Post?</p>
                </div>

                <div class="row pt-3 pr-2 d-flex flex-column align-items-center">
                    <p><img src="{{ asset('img/pizza.jpg') }}" alt="pizza" class="d-block mu-auto admin-post-img"></p>
                    <p>owner : Mike Smith</p>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer d-flex justify-content-center border-0"> 
                <form action="#" method="post">
                    <button type="submit" class="btn btn-danger btn-lg">Hide</button>
                    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                </form>
                
            </div>
            
        </div>

        <!--/.Content-->
    </div>

</div>



