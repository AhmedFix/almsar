<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\CommentsController;
use App\Http\Controllers\Api\UserController; 

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

Route::middleware('auth:sanctum')->prefix('v1')->group( function () {
    ////////////////
    // Route::apiResource('posts', BooksController::class);
    ///////////////////
    Route::post('comments/posts', [CommentsController::class, 'store']);
    Route::post('logout', [UserController::class, 'logout']);
    Route::post('update-password',[UserController::class, 'updatePassword']);
 });

Route::prefix('v1')->group(function () {
    Route::post('register', [UserController::class, 'store']);
    Route::post('login', [UserController::class, 'login']);
    Route::post('forgot-password', [UserController::class, 'forgotPassword']);
    // Route::get('show/{id}', [UserController::class, 'show']);
  
    Route::get('authors/{id}', [UserController::class, 'show']);
    Route::get('authors/{id}/posts', [UserController::class, 'posts']);
    Route::get('authors/{id}/comments', [UserController::class, 'comments']);
    
    Route::get('categories', [CategoriesController::class, 'index']);
    Route::get('categories/{id}/posts', [CategoriesController::class, 'posts']);
    
    Route::get('posts', [PostsController::class, 'index']);
    Route::get('posts/{id}', [PostsController::class, 'show']);
    Route::get('posts/{id}/comments', [PostsController::class, 'comments']);
 
   });

