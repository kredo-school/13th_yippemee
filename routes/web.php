<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BucketController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyPlanController;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;

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

//PROFILE
Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

//VISITS
Route::get('/visits/show', [VisitsController::class, 'show'])->name('visits.show');
Route::get('/visits/create', [VisitsController::class, 'create'])->name('visits.create');
// Route::delete('/visits/destroy/{id}', [VisitsController::class, 'destroy'])->name('visits.destroy');

//BUCKET
Route::get('/bucket/create', [BucketController::class, 'create'])->name('bucket.create');
Route::post('/bucket/store', [BucketController::class, 'store'])->name('bucket.store');
Route::get('/bucket/show', [BucketController::class, 'show'])->name('bucket.show');
Route::get('/bucket/{id}/edit', [BucketController::class, 'edit'])->name('bucket.edit');
Route::patch('/bucket/{id}/update', [BucketController::class, 'update'])->name('bucket.update');
Route::delete('/bucket/destroy', [BucketController::class, 'destroy'])->name('bucket.destroy');

//POST
Route::get('/posts/show', [PostController::class, 'show'])->name('posts.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//MY PLANS
Route::get('/myplans/show', [MyPlanController::class, 'show'])->name('myplans.show');


// Calendars
Route::get('/users/calendars/private/group_list', [GroupController::class, 'group'])->name('group_list');
Route::get('/group/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/group/store', [GroupController::class, 'store'])->name('group.store');
Route::get('group/{id}/show', [GroupController::class, 'show'])->name('group.show');
Route::delete('group/{id}/destroy', [GroupController::class,'destroy'])->name('group.destroy');
Route::get('/users/calendars/public/calendar',[HomeController::class,'showCalendar'])->name('calendar');
Route::get('/users/calendars/private/calendar',[HomeController::class,'showGroupCalendar'])->name('private_calendar');


//Restaurant list
Route::get('/restaurantlist', [RestaurantController::class, 'restaurantlist'])->name('restaurantlist');
Route::post('/restaurantlist/store', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurantlist/post', [RestaurantController::class, 'restaurantpost'])->name('restaurantpost');
Route::get('/genre/japanese', [RestaurantController::class, 'genrejapanese'])->name('genrejapanese');
Route::get('/genre/italian', [RestaurantController::class, 'genreitalian'])->name('genreitalian');
Route::get('/genre/chinese', [RestaurantController::class, 'genrechinese'])->name('genrechinese');
Route::get('/genrecafe/{id}', [RestaurantController::class, 'genrecafe'])->name('genrecafe');
Route::get('/genre/more', [RestaurantController::class, 'genremore'])->name('genremore');
Route::get('/area/more', [RestaurantController::class, 'areamore'])->name('areamore');
Route::get('/restaurant/detail', [RestaurantController::class, 'detail'])->name('detail');
Route::get('/restaurant/comment', [RestaurantController::class, 'restaurantcomment'])->name('restaurantcomment');
Route::get('/restaurant/comment/form', [RestaurantController::class, 'postcomment'])->name('postcomment');


Route::get('/myschedule', [HomeController::class, 'myschedule'])->name('myschedule');
Route::get('/private/yourplan', [HomeController::class, 'privateyourplan'])->name('privateyourplan');
Route::get('/public/yourplan', [HomeController::class, 'publicyourplan'])->name('publicyourplan');



//admin
Route::get('/admin/users/index', [HomeController::class, 'admin_users_index'])->name('admin.users.index');
Route::get('/admin/plans/index', [HomeController::class, 'admin_plans_index'])->name('admin.plans.index');
Route::get('/admin/posts/index', [HomeController::class, 'admin_posts_index'])->name('admin.posts.index');
Route::get('/admin/genres/index', [HomeController::class, 'admin_genres_index'])->name('admin.genres.index');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts/index', [ContactController::class, 'admin_contacts_index'])->name('admin.contacts.index');
Route::delete('/admin/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
// Route::get('/admin/contacts/index', [HomeController::class, 'admin_contacts_index'])->name('admin.contacts.index');

//social
Route::get('/social/posts/create', [HomeController::class, 'social_posts_create'])->name('social.posts.create');
Route::get('/social/posts/edit', [HomeController::class, 'social_posts_edit'])->name('social.posts.edit');
Route::get('/social/posts/show', [HomeController::class, 'social_posts_show'])->name('social.posts.show');
Route::get('/social/home',  [HomeController::class, 'social_home'])->name('social.social_home');

//friends
Route::get('/friends/list',  [HomeController::class, 'friends_list'])->name('friends.friends_list');





