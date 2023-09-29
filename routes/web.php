<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CREATE MYSELF
Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');

// Route::get('/users/private/group_lilst','group_list')->name('group_list');
Route::get('/users/private/group_list', [HomeController::class, 'group_list'])->name('group_list');
Route::get('/myschedule', [HomeController::class, 'myschedule'])->name('myschedule');
Route::get('/private/yourplan', [HomeController::class, 'privateyourplan'])->name('privateyourplan');
Route::get('/public/yourplan', [HomeController::class, 'publicyourplan'])->name('publicyourplan');
Route::get('/restaurantlist', [HomeController::class, 'restaurantlist'])->name('restaurantlist');
Route::get('/genre/japanese', [HomeController::class, 'genrejapanese'])->name('genrejapanese');
Route::get('/genre/italian', [HomeController::class, 'genreitalian'])->name('genreitalian');
Route::get('/genre/chinese', [HomeController::class, 'genrechinese'])->name('genrechinese');
Route::get('/genre/cafe', [HomeController::class, 'genrecafe'])->name('genrecafe');
Route::get('/restaurant/detail', [HomeController::class, 'detail'])->name('detail');