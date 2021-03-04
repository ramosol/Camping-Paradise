<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminApiController;



use App\Http\Controllers\VerificationApiController;
use App\Http\Controllers\UsersApiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ActiController;





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




//USER ROUTES
Route::post('user/login', [UsersApiController::class, 'userLogin']); // will work only when user has verified the email
Route::post('user/register', [UsersApiController::class, 'userRegister']);

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('user/logout', [UsersApiController::class, 'userLogout']);
    Route::get('user/details', [UsersApiController::class, 'userInfo']);
    Route::post('user/edit', [UsersApiController::class, 'userEdit']);
    Route::get('user/delete', [UsersApiController::class, 'userDelete']);
});


//VERIFY USER
Route::get('email/verify/{id}', [VerificationApiController::class, 'verify'])->name('verificationapi.verify');
Route::get('email/resend', [VerificationApiController::class, 'resend'])->name('verificationapi.resend');


//USER ADMIN ROUTES
Route::middleware(['auth:sanctum','is_admin'])->group(function(){
    Route::get('user/admin/show', [AdminApiController::class, 'userAdminShowAll']);
    Route::get('user/admin/show/{id}', [AdminApiController::class, 'userAdminShowId']);
    Route::post('user/admin/edit/{id}', [AdminApiController::class, 'userAdminEdit']);
    Route::get('user/admin/delete/{id}', [AdminApiController::class, 'userAdminDelete']);
});


//CATEGORY
Route::get('category/show', [CategoryController::class, 'catShow']);

Route::middleware(['auth:sanctum','is_admin'])->group(function(){
    Route::post('category/add', [CategoryController::class, 'catAdd']);
    Route::get('category/delete/{cat_name}', [CategoryController::class, 'catDelete']);
});


//PRODUCT
Route::get('product/show', [ProductController::class, 'prodShow']);
Route::get('product/show/{id}', [ProductController::class, 'prodShowId']);

Route::middleware(['auth:sanctum','is_admin'])->group(function(){
    Route::post('product/add', [ProductController::class, 'prodAdd']);
    Route::post('product/edit/{id}', [ProductController::class, 'prodEdit']);
    Route::get('product/delete/{id}', [ProductController::class, 'prodDelete']);
});


//CART
Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('cart/add/{product_id}', [CartController::class, 'add']);
    Route::get('cart/show', [CartController::class, 'show']);
    route::get('cart/delete/{cart_id}', [CartController::class, 'delete']);
});


//ACTI
Route::post('acti/add', [ActiController::class, 'add'])->middleware('auth:sanctum');
Route::get('acti/show', [ActiController::class, 'show']);

