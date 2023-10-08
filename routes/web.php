<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('users', [UsersController::class, 'index'])->middleware('auth');
Route::post('users', [UsersController::class, 'store']);
Route::post('users/activate', [UsersController::class, 'activate']);

Route::get('accounts', [AccountController::class, 'show'])->middleware('auth');

Route::post('accounts', [AccountController::class, 'store']);
Route::post('accounts/fetch', [AccountController::class, 'get']);
Route::delete('accounts/{account}/delete', [AccountController::class, 'destroy']);

Route::get('login', [UsersController::class, 'login'])->middleware('guest')->name('login');
Route::post('user/authenticate', [UsersController::class, 'authenticate']);

Route::get('logout', [UsersController::class, 'logout'])->middleware('auth');

Route::get('categories', [CategoriesController::class, 'index'])->middleware('auth');
Route::post('categories', [CategoriesController::class, 'store']);
Route::delete('categories/{category}/delete', [CategoriesController::class, 'destroy']);

Route::get('products', [ProductController::class, 'index']);

//Route::post('account', [AccountController::class, 'edit']);
