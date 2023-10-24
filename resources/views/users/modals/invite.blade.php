<style>


</style>



<div class="modal fade" id="invite-modal" aria-hidden="true">


    <div class="modal-dialog invite-dialog modal-xl">
        <div class="modal-content invite-content">
            <div class="modal-header invite-header w-100">
                <div class="row w-100" >
                    <h1 class="mt-2 ms-3">Family (group name)</h1>
                </div>
            </div>
            <div class="modal-body invite-body">
                <div class="to-invite">
                    <i class="fa-regular fa-plus fa-1x"></i> <p>Invite friends</p>
                </div>
                {{-- to show friends selected --}}
                <form action="#" method="get">
                    <div class="invited-friends">
                        <div class="invited-user">
                            <img src="/images/pasta.jpg" alt="user-img">
                            <p>user 1</p>
                        </div>
                        <div class="invited-user">
                            <img src="/images/pasta.jpg" alt="user-img">
                            <p>user 2</p>
                        </div>
                        <div class="invited-user">
                            <img src="/images/pasta.jpg" alt="user-img">
                            <p>user 3</p>
                        </div>
                        <div class="invited-user">
                            <img src="/images/pasta.jpg" alt="user-img">
                            <p>user 4</p>
                        </div>
                    </div>
                </form>


                <div class="friend-result" id="friend-result">
                    {{-- search input --}}
                    <form action="#" method="get">
                        <div class="input-group" id="friend-search">
                            <div class="form-outline ">
                                <input type="search" id="search-friend" class="form-control" placeholder="Search by username">
                            </div>
                            <button type="button" class="btn" id="btn-friendSearch">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>

                        <div class="row user-result">
                            <input type="checkbox" id="userNumber1">
                            <label for="userNumber1">
                                <div class="username">
                                    User 1
                                    <img src="/images/pasta.jpg" alt="user-img">
                                </div>
                            </label>
                        </div>

                        <div class="row user-result">
                            <input type="checkbox" id="userNumber2">
                            <label for="userNumber2">
                                <div class="username">
                                    User 2
                                    <img src="/images/pasta.jpg" alt="user-img">
                                </div>
                            </label>
                        </div>

                        <div class="row user-result">
                            <input type="checkbox" id="userNumber3">
                            <label for="userNumber3">
                                <div class="username">
                                    User 3
                                    <img src="/images/pasta.jpg" alt="user-img">
                                </div>
                            </label>
                        </div>

                        <div class="row user-result">
                            <input type="checkbox" id="userNumber4">
                            <label for="userNumber4">
                                <div class="username">
                                    User 4
                                    <img src="/images/pasta.jpg" alt="user-img">
                                </div>
                            </label>
                        </div>
                    </form>
                </div>



            </div>
            <div class="modal-footer invite-footer">

                <button type="button" class="btn cancel-btn" data-bs-toggle="modal" data-bs-target="#group-member" style="border: 1px solid #617ea8; border-radius: 3px; color: #253c5c; font-size:font-size: 16px;">
                    Cancel
                </button>
                {{-- button to send selected friends invitation --}}
                <form action="#" method="post">
                    <a href="#" class="invite-btn">Invite</a>
                </form>

            </div>
        </div>
    </div>
</div>
