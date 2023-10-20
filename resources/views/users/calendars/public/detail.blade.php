<div class="container detail-body" >
    <p class="text-end" style="color:#253c5c;"><i class="fa-regular fa-user-circle"></i> User 1</p>
    <div class="preference">
        <div class="pre-title">
            【Preferences】
        </div>
        <div class="pre-detail">
            <div class="row">
                <div class="col-auto"><i class="fa-regular fa-clock"></i></div>
                <div class="col-auto ps-2">11:00-17:30</div>
            </div>
            <div class="row">
                <div class="col-auto"><i class="fa-solid fa-shop"></i></div>
                <div class="col-auto ps-2">Location/ restaurant's name</div>
            </div>
            <div class="row">
                <div class="col-auto"><i class="fa-solid fa-utensils"></i></div>
                <div class="col-auto ps-2">Italian</div>
            </div>
        </div>

        <div class="pre-border"></div>

        <div class="pre-description">【Description】</div>
        <div class="pre-comment">I'm looking for someone to go to an Italian restaurant with me! <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo dicta voluptatem culpa esse harum natus tempore perferendis excepturi non, iste repudiandae commodi quis iure est. Animi expedita, incidunt praesentium ipsam suscipit odio ipsum, fugiat impedit quos omnis ullam saepe?</div>
    </div>
    <div class="row">
        <div class="col-5 hidden"></div>
        <div class="col-1">
            <i class="fa-solid fa-user-check" style="color: #253c5c;"></i>
        </div>
        <div class="col-4">
            <i class="fa-solid fa-circle-user" style="color: #1f5120;"></i>
            <i class="fa-solid fa-circle-user" style="color: #8b3768;"></i>
            <i class="fa-solid fa-circle-user" style="color: #e6bf33;"></i>
        </div>
        <div class="col-1">
            <a href="#"><i class="fa-solid fa-angles-right" style="color: #253c5c;"></i></a>
        </div>
    </div>
    <div class="row comment-form">
        <div class="comment-area">
            <h5>Comments:</h5>
            <div class="comment-screen">
                <div class="row user-comment w-100">
                    <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                    <div class="col-10">
                        <div class="row user-name">@user_1</div>
                        <div class="row one-comment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti eveniet aperiam non maxime placeat odio, reiciendis atque eius optio?</div>
                    </div>
                </div>

                <div class="row user-comment w-100">
                    <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                    <div class="col-10">
                        <div class="row user-name">@user_1</div>
                        <div class="row one-comment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti eveniet aperiam non maxime placeat odio, reiciendis atque eius optio?</div>
                    </div>
                </div>
            </div>
        </div>
        <form action="#" method="post">
            <div class="input-group comment">
                <input type="text" class="form-control form-comment" placeholder="Comment" aria-label="Comment" aria-describedby="comment-form">
                <button class="btn btn-comment" type="button" id="comment-form"><i class="fa-solid fa-paper-plane fa-white"></i></button>
            </div>
        </form>
    </div>
    <form action="#" method="post" class="float-end">
        {{-- could be checkbox...? --}}
        <button type="submit" class="btn btn-join"><span>JOIN <i class="fa-solid fa-person-walking-arrow-right" style="color: #253c5c;"></i></span></button>
        {{-- add undo button --}}
    </form>
</div>

