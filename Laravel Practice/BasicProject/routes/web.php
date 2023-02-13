<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::post('/upload_post',[HomeController::class,'upload']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/action_contact', [HomeController::class, 'action'])->name('action');

Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::get('/update_post/{id}', [HomeController::class, 'update_post'])->name('update_post');
Route::post('/confirm/{id}', [HomeController::class, 'confirm'])->name('confirm');
Route::get('/delete_post/{id}', [HomeController::class, 'delete_post'])->name('delete_post');

