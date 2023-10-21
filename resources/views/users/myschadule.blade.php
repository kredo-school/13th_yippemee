@extends('layouts.app')

@section('title', 'My Schedule')

@section('content')

<?php
//タイムゾーンを設定
date_default_timezone_set('America/Los_Angeles');
 
//前月・次月リンクが選択された場合は、GETパラメーターから年月を取得
if(isset($_GET['ym'])){ 
    $ym = $_GET['ym'];
}else{
    //今月の年月を表示
    $ym = date('Y-m');
}
 
//タイムスタンプ（どの時刻を基準にするか）を作成し、フォーマットをチェックする
//strtotime('Y-m-01')
$timestamp = strtotime($ym . '-01'); 
if($timestamp === false){//エラー対策として形式チェックを追加
    //falseが返ってきた時は、現在の年月・タイムスタンプを取得
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
 
//今月の日付　フォーマット　例）2020-10-2
$today = date('Y-m-j');
 
//カレンダーのタイトルを作成　例）2020年10月
$html_title = date('Y, F', $timestamp);//date(表示する内容,基準)
 
//前月・次月の年月を取得
//strtotime(,基準)
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));
 
//該当月の日数を取得
$day_count = date('t', $timestamp);
 
//１日が何曜日か
$youbi = date('w', $timestamp);
 
//カレンダー作成の準備
$weeks = [];
$week = '';
 
//第１週目：空のセルを追加
//str_repeat(文字列, 反復回数)
$week .= str_repeat('<td></td>', $youbi);
 
for($day = 1; $day <= $day_count; $day++, $youbi++){
    
    $date = $ym . '-' . $day; //2020-00-00
    
    if($today == $date){
        
        $week .= '<td class="today">' . $day;//今日の場合はclassにtodayをつける
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
    
    if($youbi % 7 == 6 || $day == $day_count){//週終わり、月終わりの場合
        //%は余りを求める、||はまたは
        //土曜日を取得
        
        if($day == $day_count){//月の最終日、空セルを追加
            $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
        }
        
        $weeks[] = '<tr>' . $week . '</tr>'; //weeks配列にtrと$weekを追加
        
        $week = '';//weekをリセット
    }
}
    
?>
<div class="background pt-5 ">
    <div class="container ">
        <h2 class="mx-auto text-center  bg-white w-50 rounded"><u>My Schedule</u></h2>
    
        <div class="row mt-5">
        <div class="col-md-6"></div>   
            <div class="col-md-6">
            <input type="radio"  name="date" value="date" class="w-25">
            <label for="contactChoice1">Date</label>

            <input type="radio" name="date" value="place" class="w-25">
            <label for="contactChoice2">Place</label>
            </div>
            
    </div>

        <div class="row ">
            <div class="col-md-12">
                        <div class="elegant-calencar d-md-flex bg-white ">
                            <div class="wrap-header d-flex align-items-center img pe-5 " >
                                <p id="reset">Today</p>

                                    <div class="header w-100 mt-5 mb-5" style="height:500px;">
                                        <div class="head-info mt-5 " >
                                            <div class="head-month text-center ">September</div>
                                            <div class="head-day ">16th</div>
                                        </div>
                                            <div class="head-month text-start ms-3 mt-5
                                            "><u>Title :</u></div>
                                            <div class="head-month mt-3 text-start ms-3"><i class="fa-solid fa-map-pin me-2"></i>Location :</div>
                                            <div class="head-month mt-3 text-start ms-3"><i class="fa-regular fa-clock me-2"></i>Time :</div>
                                            <hr>
                                            <div class="head-month text-start ms-3">Description:</div>
                                            <hr>
                                    
                                            <a href="#" class="text-end mb-5" data-bs-toggle="modal" data-bs-target="#activate-modal">Show more</a>
                                        </div>
                                    
                            </div>
                            
                            <div class="calendar-wrap">
                                <div class=" button-wrap">
                                    <h3><a href="?ym=<?php echo $prev; ?>" class="me-5">&lt;</a><?php echo $html_title; ?><a href="?ym=<?php echo $next; ?>" class="ms-5">&gt;</a></h3>
                                
                                </div>
                                
                                <table id="calendar" class="calendar" style="width:100%; height:75%;">
                                    
                                        <tr>
                                            <th>Sun</th>
                                            <th>Mon</th>
                                            <th>Tue</th>
                                            <th>Wed</th>
                                            <th>Thu</th>
                                            <th>Fri</th>
                                            <th>Sat</th>
                                        </tr>
                                        <?php
                                            foreach ($weeks as $week) {
                                                echo $week;
                                            }
                                        ?>
                    
                                </table>                               
                            </div>                           
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <button class="btn btn-warning mt-5 w-25 ">Back</button>
                            </div>
                        </div>
                </div>               
            </div>
        </div>   
    </div>
</div>
    @include('users.modal.status')
@endsection