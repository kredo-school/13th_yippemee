<div class="modal fade" id="member{{ $group['id'] }}" aria-hidden="true">
    <div class="modal-dialog member-dialog modal-xl">
        <div class="modal-content member-content">
            <div class="modal-header member-header w-100">
                <div class="row w-100" >
                    <h1 class="mt-2 ms-3">{{ $group->name }}</h1>
                </div>
            </div>
            <div class="modal-body member-body">
                <div class="group-name">
                    <h4><span>Members (7) (number):</span></h4>
                </div>
                <div class="table-box">
                    <div class="member-table">
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="row member-row">
                            <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                            <div class="col-8">user name</div>
                            <div class="col-2">
                                <form action="#" method="post">
                                    <a href="#"><i class="fa-solid fa-circle-minus fa-lg" style="color:#dc3545; "></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer member-footer">

                <button type="button" class="btn invite-modal-btn" data-bs-toggle="modal" data-bs-target="#invite-modal">
                    <div class="to-invite">
                        <i class="fa-regular fa-plus fa-1x"></i> <p>Invite friends</p></button>
                    </div>
            </div>
        </div>
    </div>
</div>
@include('users.modals.invite')
