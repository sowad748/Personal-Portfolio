<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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
// Route::resource('products', ProductController::class);


//public
Route::post('/register', [AuthController::class,'register']);
  Route::post('/login', [AuthController::class,'login']);
 Route::get('/products', [ProductController::class,'index']);
 Route::get('/products/{product}',[ProductController::class,'show']);


 Route::get('/products/search/{name}',[ProductController::class, 'search']);
// Route::group(['middleware'=>['auth:sanctum']], function(){
//     Route::get('/products/search/{name}',[ProductController::class, 'search']);
// });



//protected
Route::middleware(['auth:sanctum'])->group(function () {


    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{products}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class,'logout']);

});

