<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/users/private/group_lilst','group_list')->name('group_list');
Route::get('/users/calendars/private/group_list', [HomeController::class, 'group_list'])->name('group_list');

Route::get('/users/private/group_list', [HomeController::class, 'group_list'])->name('group_list');

Route::get('/admin/users/index', [HomeController::class, 'admin_users_index'])->name('admin.users.index');
Route::get('/admin/plans/index', [HomeController::class, 'admin_plans_index'])->name('admin.plans.index');
Route::get('/admin/posts/index', [HomeController::class, 'admin_posts_index'])->name('admin.posts.index');
Route::get('/admin/genres/index', [HomeController::class, 'admin_genres_index'])->name('admin.genres.index');

Route::get('/social/posts/create', [HomeController::class, 'social_posts_create'])->name('social.posts.create');
Route::get('/social/posts/edit', [HomeController::class, 'social_posts_edit'])->name('social.posts.edit');
