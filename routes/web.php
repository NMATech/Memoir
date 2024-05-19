<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerHome;
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

Route::get('/', [controllerHome::class, 'login'])
    ->name('login');
Route::get('/register', [RegisteredUserController::class, 'view'])
    ->name('register');

Route::middleware('auth')->group(function (){
    Route::get('/home', [controllerHome::class, 'home'])
        ->name('home');

    Route::get('/user_profile', [UserProfileController::class, 'show'])
        ->name('user.profile');

    Route::post('/user_profile', [UserProfileController::class, 'update'])
        ->name('user.update_profile');

    Route::get('img/{dir}/{id}.jpg', [ResourceController::class, 'getImg']);
    Route::get('public/images/post/{wildcard}', [ResourceController::class, 'getPostImg'])
        ->where('wildcard', '.*');
});

Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/register', [RegisteredUserController::class, 'store']);
