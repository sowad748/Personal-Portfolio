<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::post('follow/{user}',[App\Http\Controllers\FollowsController::class, 'store'] );

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/show', [App\Http\Controllers\PostsController::class, 'show']);

Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update']);

