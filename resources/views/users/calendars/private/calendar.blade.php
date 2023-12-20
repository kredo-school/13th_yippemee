@extends('layouts.app')
@section('title', 'private calendar')
@section('content')
<link href="{{ asset('css/private.css') }}" rel="stylesheet">
<div class="container calendar-title" id="private">
    <h2 class="text-center">Decide by Place</h2>
    <span class="bar bar-short mt-4"></span>
    <p class="text-center pt-4 mb-0">Let's check what your friends' preference,<br>and add yours too.</p>
</div>
<div class="left-navi">
    @include('users.calendars.private.preferencelist')
</div>
<div class="main-div" id="private-div">
    <div class="main-contents">
        <div class="top-button">
            <div class="row">
                <div class="col text-end">
                    @isset($group)
                        <a href="#" class="btn btn-create-plan mt-2" data-bs-toggle="modal" data-bs-target="#preference-modal-{{ $group->id }}" id="group-calendar-button" data-group-id="{{ $group->id }}"><i class="fa-regular fa-calendar-plus fa-3x"></i></a>
                    @endisset
                </div>
            </div>
        </div>
        @include('users.calendars.calendar')
        <script>
            $(document).ready(function () {
                // モーダルを開くトリガーに対してクリックイベントを設定
                $('.btn-create-plan').on('click', function () {
                    // 選択されているグループの group_id を取得
                    var groupId = $(this).data('group-id');
                    // モーダル内のフォームに group_id を設定
                    $('#preference-modal').find('#group_id').val(groupId);
                });
            });
        </script>
    </div>
</div>
<div class="right-navi" id="private-right-navi">
    @include('users.calendars.private.detail')
</div>
{{-- modal --}}
@include('users.modals.create-pre')
@endsection
