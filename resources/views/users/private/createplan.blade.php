<div class="modal fade" id="privatecreateplan-modal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ms-2 me-2 ">
            <div class="modal-header w-100 align-items-center bg-warning" style="color: #F1A29B; ;">
                        <div class="row w-100" >
                            <div class="col-11">
                                <h1 class="mt-2 text-white"><i class="fa-solid fa-calendar-plus" style="color: #FFFFFF;   "></i> Create your plan</h1>
                            </div>
                            <div class="col-1 ">
                                <button type="button" class="close float-end border-0 text-white bg-secondary rounded" data-bs-dismiss="modal" ><i class="fa-solid fa-x"></i> close
                            </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body bg-white">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row"><label class="label-title" for="date" ><i class="fa-regular fa-calendar"></i> Date</label>
                                    </div>
                                    <input type="date" class="w-75">
                                </div>

                                <div class="col-6 ">
                                    <div class="row">
                                        <h2 class="label-title"><i class="fa-regular fa-clock"></i> Time</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="s-time" for="s-time">Start Time</label><br>
                                            <input type="time" class="s-time">
                                        </div>
                                        <div class="col-auto">
                                            <p class="pt-4">~</p>
                                        </div>
                                        <div class="col-auto">
                                            <label class="e-time" for="e-time">End Time</label><br>
                                            <input type="time" class="e-time">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label class="label-title" for="restaurant"><i class="fa-solid fa-shop"></i> Restaurant</label>
                                    <br>
                                    <input type="search" class="w-75">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <h2 class="label-title"><i class="fa-solid fa-utensils"></i> Genre</h2>
                                    </div>
                                    <div class="container genre">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="checkbox" name="genre"value="japanese">
                                                <label for="Japanese" class="genre-name">Japanese</label>
                                                    <br>
                                                <input type="checkbox" name="genre"value="italian">
                                                <label for="italian" class="genre-name">Italian</label>
                                                    <br>
                                                <input type="checkbox" name="genre"value="french">
                                                <label for="frech" class="genre-name">French</label>
                                                </div>
                                            <div class="col-6">
                                                <input type="checkbox" name="genre"value="indian">
                                                <label for="indian" class="genre-name-bottom">Indian</label>
                                                    <br>
                                                <input type="checkbox" name="genre"value="chinese">
                                                <label for="chinese" class="genre-name-bottom">Chinese</label>
                                                    <br>
                                                <input type="checkbox" name="genre"value="other">
                                                <label for="other" class="genre-name-bottom">Other</label>
                                                </div>
                                            </div>
                                        </div>                               
                                </div>
                            </div>
                            <label class="label-title" for="description"><i class="fa-solid fa-pencil"></i> Description</label>
                                <br>
                            <textarea name="description" id="description" cols="72" rows="5" class="w-100"></textarea>
                        </form>
                    </div>

                    <div class="card-footer bg-white border-0 mb-2">
                        <form action="#" method="get">
                            <button type="submit" class="btn-create float-end">Create</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
