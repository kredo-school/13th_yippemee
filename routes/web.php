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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/users/private/group_lilst','group_list')->name('group_list');
Route::get('/users/calendars/private/group_list', [HomeController::class, 'group_list'])->name('group_list');

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

//admin
Route::get('/admin/users/index', [HomeController::class, 'admin_users_index'])->name('admin.users.index');
Route::get('/admin/plans/index', [HomeController::class, 'admin_plans_index'])->name('admin.plans.index');
Route::get('/admin/posts/index', [HomeController::class, 'admin_posts_index'])->name('admin.posts.index');
Route::get('/admin/genres/index', [HomeController::class, 'admin_genres_index'])->name('admin.genres.index');

//social
Route::get('/social/posts/create', [HomeController::class, 'social_posts_create'])->name('social.posts.create');
Route::get('/social/posts/edit', [HomeController::class, 'social_posts_edit'])->name('social.posts.edit');
Route::get('/social/posts/show', [HomeController::class, 'social_posts_show'])->name('social.posts.show');
Route::get('/social/home',  [HomeController::class, 'social_home'])->name('social.social_home');


Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/admin/contacts/index', [HomeController::class, 'admin_contacts_index'])->name('admin.contacts.index');

