<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//public rout 
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);


//post
Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);


//comment
Route::get('coments', [ComentController::class, 'index']);
Route::post('coments', [ComentController::class, 'store']);
Route::get('coments/{id}', [ComentController::class, 'show']);
Route::put('coments/{id}', [ComentController::class, 'update']);
Route::delete('coments/{id}', [ComentController::class, 'destroy']);


// 
Route::get('roles', [RoleController::class, 'index']);
Route::post('roles', [RoleController::class, 'store']);
Route::get('roles/{id}', [RoleController::class, 'show']);
Route::put('roles/{id}', [RoleController::class, 'update']);
Route::delete('roles/{id}', [RoleController::class, 'destroy']);



Route::get('/profiles', [ProfileeController::class, 'index']);
Route::post('/profiles', [ProfileeController::class, 'store']);

//permission routes
Route::get('/profiles/{id}', [ProfileeController::class, 'show']);
Route::put('/profiles/{id}', [ProfileeController::class, 'update']);
Route::delete('/profiles/{id}', [ProfileeController::class, 'destroy']);
