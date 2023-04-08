<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\CustomersController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\SettingController;
use App\Models\Reservation;

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
// Homepage
Route::get('/', [StaticPagesController::class, 'home']);

// Static Pages
Route::get('/menu', [StaticPagesController::class, 'menu']);
Route::get('/menu/{slug}', [StaticPagesController::class, 'singleMenu']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/reservations', [StaticPagesController::class, 'reservations']);
Route::post('/reservations', [StaticPagesController::class, 'saveReservation']);
Route::get('/reservations/thank-you', [StaticPagesController::class, 'reservationThankyou']);
Route::get('/offers', [StaticPagesController::class, 'offers']);
Route::post('/offers', [StaticPagesController::class, 'registerMember']);
Route::get('/offers/thank-you', [StaticPagesController::class, 'offersThankyou']);
Route::get('/contact', [StaticPagesController::class, 'contact']);

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'dashboard']);


// Admin Food Categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create']);
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit']);
Route::post('/admin/food-categories', [FoodCategoriesController::class, 'store']);
// use POST but method PUT on the edit page
Route::put('/admin/food-categories/{id}', [FoodCategoriesController::class, 'update']);
// post or get for delete
Route::delete('/admin/food-categories/{id}/delete', [FoodCategoriesController::class, 'delete']);


// Admin Food Items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create']);
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit']);
Route::post('/admin/food-items', [FoodItemsController::class, 'store']);
// use POST but method PUT on the edit page
Route::put('/admin/food-items/{id}', [FoodItemsController::class, 'update']);
// post or get for delete
Route::delete('/admin/food-items/{id}/delete', [FoodItemsController::class, 'delete']);



// Admin Customers
// Admin members
Route::get('/admin/members', [MemberController::class, 'index']);
Route::delete('/admin/members/{id}/delete', [MemberController::class, 'delete']);

// Admin reservations
Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::get('/admin/reservations/create', [ReservationController::class, 'create']);
Route::get('/admin/reservations/{id}/edit', [ReservationController::class, 'edit']);
Route::post('/admin/reservations', [ReservationController::class, 'store']);
// use POST but method PUT on the edit page
Route::put('/admin/reservations/{id}', [ReservationController::class, 'update']);
// post or get for delete
Route::delete('/admin/reservations/{id}/delete', [ReservationController::class, 'delete']);

// Admin Users
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/create', [UsersController::class, 'create']);
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit']);
Route::post('/admin/users', [UsersController::class, 'store']);
// use POST but method PUT on the edit page
Route::put('/admin/users/{id}', [UsersController::class, 'update']);
// post or get for delete
Route::delete('/admin/users/{id}/delete', [UsersController::class, 'delete']);


// Admin Settings
Route::get('/admin/settings/general', [SettingController::class, 'general']);
Route::post('/admin/settings/general', [SettingController::class, 'saveGeneral']);
Route::get('/admin/settings/seo', [SettingController::class, 'seo']);
Route::post('/admin/settings/seo', [SettingController::class, 'saveSeo']);
Route::get('/admin/settings/social', [SettingController::class, 'social']);
Route::post('/admin/settings/social', [SettingController::class, 'saveSocial']);


// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
