<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BucketController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyPlanController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialPostController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\WantController;
use App\Http\Controllers\Admin\AdminPostsController;
use App\Http\Controllers\SocialCommentController;


use App\Http\Controllers\ListCommentController;
use App\Models\SocialComment;

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
Route::get('/visits/create', [VisitController::class, 'create'])->name('visits.create');
Route::post('/visits/store', [VisitController::class, 'store'])->name('visits.store');
Route::get('/visits/show', [VisitController::class, 'show'])->name('visits.show');
Route::get('/visits/{id}/edit', [VisitController::class, 'edit'])->name('visits.edit');
Route::patch('/visits/{id}/update', [VisitController::class, 'update'])->name('visits.update');
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
// group list
Route::get('/users/calendars/private/group_list', [GroupController::class, 'group'])->name('group_list');
Route::get('/group/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/group/store', [GroupController::class, 'store'])->name('group.store');
Route::get('group/{id}/show', [GroupController::class, 'show'])->name('group.show');
Route::get('group/{id}/edit', [GroupController::class, 'edit'])->name('group.edit');
Route::patch('group/{id}/update', [GroupController::class], 'update')->name('group.update');
Route::delete('group/{id}/destroy', [GroupController::class,'destroy'])->name('group.destroy');
// private calendar
Route::get('/users/calendars/private/calendar',[HomeController::class,'showGroupCalendar'])->name('private_calendar');
// public calendar
Route::get('/users/calendars/public/calendar',[HomeController::class,'showCalendar'])->name('calendar');
// test
Route::get('users/calendars/public/test-calendar',[HomeController::class,'showTest'])->name('test');

//Restaurant list
Route::get('/restaurantlist', [RestaurantController::class, 'restaurantlist'])->name('restaurantlist');
Route::post('/restaurantlist/store', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurantlist/post', [RestaurantController::class, 'restaurantpost'])->name('restaurantpost');
Route::get('/genre/japanese/', [RestaurantController::class, 'genrejapanese'])->name('genrejapanese');
Route::get('/genre/italian', [RestaurantController::class, 'genreitalian'])->name('genreitalian');
Route::get('/genre/chinese', [RestaurantController::class, 'genrechinese'])->name('genrechinese');
Route::get('/genrecafe/{id}', [RestaurantController::class, 'genrecafe'])->name('genrecafe');
Route::get('/genre/more', [RestaurantController::class, 'genremore'])->name('genremore');
Route::get('/area/more', [RestaurantController::class, 'areamore'])->name('areamore');
Route::get('/restaurant/detail/{id}', [RestaurantController::class, 'detail'])->name('detail');
Route::get('/restaurant/comment/{id}', [RestaurantController::class, 'restaurantcomment'])->name('restaurantcomment');
Route::get('/restaurant/comment/form/{id}', [RestaurantController::class, 'postcomment'])->name('postcomment');
Route::post('/restaurant/comment/form/store/{restaurant_id}', [ListCommentController::class, 'commentstore'])->name('comment.store');


Route::get('/myschedule', [HomeController::class, 'myschedule'])->name('myschedule');
Route::get('/private/yourplan', [HomeController::class, 'privateyourplan'])->name('privateyourplan');
Route::get('/public/yourplan', [HomeController::class, 'publicyourplan'])->name('publicyourplan');



//admin
Route::get('/admin/users/index', [HomeController::class, 'admin_users_index'])->name('admin.users.index');
Route::get('/admin/plans/index', [HomeController::class, 'admin_plans_index'])->name('admin.plans.index');

Route::get('/admin/posts/index', [AdminPostsController::class, 'admin_posts_index'])->name('admin.posts.index');
Route::patch('/admin/posts/{id}/unhide', [AdminPostsController::class, 'unhide'])->name('admin.posts.unhide');
Route::delete('/admin/posts/{id}/hide', [AdminPostsController::class, 'hide'])->name('admin.posts.hide');

Route::get('/admin/genres/index', [HomeController::class, 'admin_genres_index'])->name('admin.genres.index');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts/index', [ContactController::class, 'admin_contacts_index'])->name('admin.contacts.index');
Route::delete('/admin/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
// Route::get('/admin/contacts/index', [HomeController::class, 'admin_contacts_index'])->name('admin.contacts.index');

//social
Route::get('/social/home',  [SocialPostController::class, 'social_home'])->name('social.social_home');
Route::post('/social/posts/store', [SocialPostController::class, 'store'])->name('social.posts.store');
Route::get('/social/posts/{id}/show', [SocialPostController::class, 'show'])->name('social.posts.show');
Route::get('/social/posts/create', [SocialPostController::class, 'create'])->name('social.posts.create');
Route::get('/social/posts/{id}/edit', [SocialPostController::class, 'edit'])->name('social.posts.edit');
Route::patch('/social/posts/{id}/update', [SocialPostController::class, 'update'])->name('social.posts.update');
Route::delete('/social/posts/{id}/destroy', [SocialPostController::class, 'destroy'])->name('social.posts.destroy');

//social_comment
Route::post('/social/comment/{social_post_id}/store', [SocialCommentController::class, 'store'])->name('social_comment.store');
Route::delete('/social/comment/{social_post_id}/destroy', [SocialCommentController::class, 'destroy'])->name('social_comment.destroy');

//friends
Route::get('/friends/list',  [HomeController::class, 'friends_list'])->name('friends.friends_list');

//like
Route::post('social/posts/{social_post}/like', [LikeController::class, 'store'])->name('social.posts.like');
Route::delete('social/posts/{social_post}/unlike', [LikeController::class, 'destroy'])->name('social.posts.unlike');

//want
Route::post('social/posts/{social_post}/want', [WantController::class, 'store'])->name('social.contents.want');
Route::delete('social/posts/{social_post}/want/destroy', [WantController::class, 'destroy'])->name('social.contents.want.destroy');
