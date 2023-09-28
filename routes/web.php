<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BucketController;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\ProfileController;

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

//CREATE PROFILE
Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

//CREATE VISITS
Route::get('/visits/show', [VisitsController::class, 'show'])->name('visits.show');
Route::get('/visits/create', [VisitsController::class, 'create'])->name('visits.create');
Route::delete('/visits/destroy/{id}', [VisitsController::class, 'destroy'])->name('visits.destroy');

//CREATE BUCKET
Route::get('/bucket/show', [BucketController::class, 'show'])->name('bucket.show');
Route::get('/bucket/create', [BucketController::class, 'create'])->name('bucket.create');
Route::delete('/bucket/destroy', [BucketController::class, 'destroy'])->name('bucket.destroy');



// Route::get('/users/private/group_lilst','group_list')->name('group_list');
Route::get('/users/private/group_list', [HomeController::class, 'group_list'])->name('group_list');
