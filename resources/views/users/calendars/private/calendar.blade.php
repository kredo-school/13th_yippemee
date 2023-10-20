@extends('layouts.app')
@section('title', 'private calendar')
@section('content')
<style>
body{
    background-image: url('/images/restaurant3.jpg');
    background-size:cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}
</style>

<div class="container calendar-title" id="private">
    <h2 class="text-center">Decide by Place</h2>
    <span class="bar bar-short mt-4"></span>
    <p class="text-center pt-4 mb-0">Let's check what your friends' preference,<br>and add yours too.</p>
</div>

<div class="left-navi">
    <div class="container plan-body">
        <p class="text-center" style="color:#253c5c;"><i class="fa-regular fa-clipboard"></i> Created Plan List</p>

        <div class="planlist-date">【1 September, 2023】</div>
        {{-- @if / foreach --}}
        <div class="list-group">
            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    11:30
                    17:30
                </div>
                <div class="col-7 name-col">User 1</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    15:00
                    16:30
                </div>
                <div class="col-7 name-col">User 4</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    19:30
                    22:00
                </div>
                <div class="col-7 name-col">User 2</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    11:30
                    17:30
                </div>
                <div class="col-7 name-col">User 1</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    15:00
                    16:30
                </div>
                <div class="col-7 name-col">User 4</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    19:30
                    22:00
                </div>
                <div class="col-7 name-col">User 2</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    11:30
                    17:30
                </div>
                <div class="col-7 name-col">User 1</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    15:00
                    16:30
                </div>
                <div class="col-7 name-col">User 4</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>

            <a href="#" class="btn-detail text-decoration-none">
                <div class="col-auto time-col">
                    19:30
                    22:00
                </div>
                <div class="col-7 name-col">User 2</div>
                <div class="col-auto avatar-col"><i class="fa-regular fa-circle-user fa-2x" style="color: #253c5c;"></i></div>
            </a>
        </div>

    </div>
</div>

<div class="main-div" id="private-div">
    <div class="main-contents">
        <div class="top-button">
            <div class="row">
                <div class="col text-end">
                    <a href="#" class="btn btn-create-plan mt-2" data-bs-toggle="modal" data-bs-target="#preference-modal"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
                </div>
            </div>
        </div>
        <div class="monthly-calendar">
            <div class="w-100 calendar-button text-center">
                <h1 class="text-center">
                    September
                </h1>
                <div class="pre-next-button justify-content-center">
                    <a href="#" class="text-decoration-none me-4"><i class="fa fa-chevron-left fw-bold" style="color: #253c5c;"></i></a>
                    <a href="#" class="text-decoration-none ms-4"><i class="fa fa-chevron-right" style="color: #253c5c;"></i></a>
                </div>
            </div>
            <table id="private-calendar">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="button-to-list text-decoration-none">1</a>
                        </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="right-navi" id="private-right-navi">
    <div class="container detail-body" >
        {{-- id="preference-detail" --}}
        <p class="text-end" style="color:#253c5c;"><i class="fa-regular fa-user-circle"></i> Group Chat</p>


        <div class="chat-area">
            <div class="chat-screen">
                <div class="row user-chat w-100">
                    <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                    <div class="col-10">
                        <div class="row user-name">@user_1</div>
                        <div class="row one-chat">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi deleniti eveniet aperiam non maxime placeat odio, reiciendis atque eius optio?</div>
                    </div>
                </div>

                <div class="row user-chat w-100">
                    <div class="col-2"><i class="fa-regular fa-user-circle fa-xl"></i></div>
                    <div class="col-10">
                        <div class="row user-name">@user_1</div>
                        <div class="row one-chat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa ipsam hic atque exercitationem, quis nam tenetur, ducimus iusto saepe iste, minima error consequuntur perferendis est optio explicabo officiis ipsa neque itaque fugit autem adipisci? Animi incidunt magnam, blanditiis reprehenderit qui hic reiciendis, placeat repellendus vero unde nemo eum explicabo quo doloremque dolorum ut? Culpa minima voluptates a vel impedit repellendus corrupti explicabo autem accusamus aperiam suscipit, sunt, quasi voluptatibus numquam nam! Qui, enim saepe? Error, rerum. Natus laudantium quam tempore illum, neque accusamus facilis sapiente soluta inventore placeat aspernatur hic doloribus aut enim consectetur, beatae fugiat? Esse, inventore? Magni quibusdam esse nobis est aliquid nulla quod impedit natus laboriosam, perspiciatis voluptatem iusto voluptas repudiandae. Ullam, temporibus iusto nesciunt commodi est veritatis adipisci maiores! Laudantium excepturi qui alias expedita cumque? Modi neque vel facere veritatis dolorem voluptates harum repudiandae deleniti, consequatur enim amet eius laudantium fugit quos at laboriosam temporibus mollitia pariatur cupiditate expedita similique consectetur? Id placeat culpa ducimus fugiat iusto! Placeat, repellendus culpa aperiam similique dignissimos voluptatibus fugit distinctio, aliquam modi recusandae eius sapiente consequatur pariatur ipsam maiores, voluptatum id autem expedita dolorem. Aliquam accusamus at inventore? Ipsa quas illo voluptatibus deserunt quos amet delectus reiciendis impedit quaerat, dignissimos quibusdam necessitatibus odit non nesciunt dicta nihil numquam. Tenetur fuga dolorum earum, nostrum labore dolore et sit esse culpa assumenda, error quos iusto quasi aliquam quae totam dicta odio laboriosam vel provident? At blanditiis quae ipsa, commodi eos sapiente dolorum aperiam et doloremque provident consectetur est natus odit excepturi facere hic, dolore itaque similique ab. Assumenda ex sit ipsa magnam laboriosam dicta ab facilis officia cumque fuga rerum voluptatem optio voluptatum, accusamus, harum laborum dolores numquam saepe, qui consequatur natus doloribus! Eveniet, praesentium veniam delectus doloribus nemo voluptatum quo accusamus repellendus pariatur debitis voluptatem nisi sapiente rerum magni earum porro perspiciatis quas hic non consequatur optio provident error. Quaerat perspiciatis natus eligendi reiciendis, sed impedit esse reprehenderit laborum? Aut, cum obcaecati. Cupiditate, repellendus nisi sunt cumque in explicabo voluptates distinctio earum modi saepe officia iure laborum quae architecto eaque vel ab quis sed voluptas ratione sequi sapiente reiciendis quas esse? Fugiat soluta quis iste voluptas similique dolor! Nesciunt reprehenderit neque ut quasi nam quos nihil, deleniti quaerat culpa perferendis dolore est incidunt tenetur nisi ea ab ad saepe nostrum accusantium explicabo, quidem atque? Harum excepturi deleniti eius voluptatibus soluta magnam sed corrupti assumenda, dolorum hic, commodi velit laudantium atque ad voluptatum, recusandae veniam quo esse optio in! Dignissimos provident rem aliquid, perspiciatis eum facere dicta minus labore suscipit? Nemo iste similique incidunt blanditiis. Atque totam ipsa ad doloremque rem ipsum molestias, aperiam veritatis facilis asperiores itaque quidem eligendi expedita exercitationem, eos ducimus omnis animi perferendis deleniti praesentium excepturi dolorum iusto inventore illum. Autem id obcaecati distinctio voluptatum, adipisci dolorem nostrum asperiores atque, velit deserunt illum sed! Nulla, qui facilis! Temporibus minima ea neque. Commodi nobis hic laborum, laboriosam quo nulla assumenda incidunt in sapiente vero ipsa asperiores consequatur voluptates doloribus aperiam consectetur? Laborum aliquid magnam possimus in rerum? Harum, dolorem.</div>
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
</div>

{{-- modal --}}
@include('users.modals.preference')
@endsection

