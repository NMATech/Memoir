<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->group(function (){

//    Route::apiResource('post', PostController::class);
//
//    Route::prefix('comment')->group(function (){
//        Route::get('{post_id}', [CommentController::class, 'index']);
//        Route::post('{post_id}', [CommentController::class, 'store']);
//        Route::get('/at/{id}', [CommentController::class, 'show']);
//        Route::put('/at/{id}', [CommentController::class, 'update']);
//        Route::delete('/at/{id}', [CommentController::class, 'destroy']);
//    });
});
