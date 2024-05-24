<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserRelationshipController;
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

    Route::get('/user_profile/{id}', [UserProfileController::class, 'show'])
        ->where('id', '[0-9]+');
    Route::post('/user_profile', [UserProfileController::class, 'update'])
        ->name('user.update_profile');

    Route::post('/search', SearchController::class);

    Route::post('/user/follow/{id}', [UserRelationshipController::class, 'followUser'])
        ->where('id', '[0-9]+');
    Route::post('/user/block/{id}', [UserRelationshipController::class, 'blockUser'])
        ->where('id', '[0-9]+');

    Route::prefix('post')->group(function (){
        Route::get('/', [PostController::class, 'view'])
            ->name('user.post_create');
        Route::post('/', [PostController::class, 'store']);
        Route::get('/{id}', [PostController::class, 'show'])
            ->name('user.post_show');
        Route::delete('/{id}', [PostController::class, 'destroy']);
    });

    Route::prefix('comment')->group(function (){
        Route::post('/', [CommentController::class, 'store']);
        Route::delete('/{id}', [CommentController::class, 'destroy']);
    });

    Route::prefix('user')->group(function (){
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
    });

    Route::get('img/{dir}/{id}.jpg', [ResourceController::class, 'getImg']);
    Route::get('public/images/post/{wildcard}', [ResourceController::class, 'getPostImg'])
        ->where('wildcard', '.*');
});

Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/register', [RegisteredUserController::class, 'store']);
