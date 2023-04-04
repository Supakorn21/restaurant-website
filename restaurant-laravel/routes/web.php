<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\CustomersController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\admin\UsersController;
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
Route::get('/offers', [StaticPagesController::class, 'offers']);
Route::get('/contact', [StaticPagesController::class, 'contact']);

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'dashboard']);
// Admin Food Categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create']);
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit']);


// Admin Food Items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create']);
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit']);


// Admin Customers
Route::get('/admin/offers-members', [CustomersController::class, 'allOffersMembers']);
Route::get('/admin/reservations', [CustomersController::class, 'allReservations']);

// Admin Users
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/create', [UsersController::class, 'create']);
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit']);
Route::post('/admin/users', [UsersController::class, 'store']);
// use POST but method PUT on the edit page
Route::put('/admin/users/{id}', [UsersController::class, 'update']);
// post or get for delete
Route::delete('/admin/users/{id}/delete', [UsersController::class, 'delete']);

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
