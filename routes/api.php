<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
// Route::resource('products',App\Http\Controllers\ProductController::class);
// Route::get('/Products',function(){
// return 'products';
// });
// Route::post('/Product',function(){
//     return Product::create([
//                 'name'=>'product one',
//                 'slug'=>'test product',
//                 'description'=>'product for testing',
//                 'price'=>'99.5',
//     ]);
// });
//     


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware'=>['auth:sanctum']],function(){

//    Route::get('/product/search/{name}',[App\Http\Controllers\ProductController::class,'search']);
//    Route::post('/products/search',[App\Http\Controllers\ProductController::class,'search']);
//    Route::post('/product/store',[App\Http\Controllers\ProductController::class,'store']);
  
// });
// Route::get('/product/search/{name}',[App\Http\Controllers\ProductController::class,'search']);
// Route::group(['middleware' => ['web']], function () {
    // Route::post('user/login',[App\Http\Controllers\UserController::class,'login']);
// });

// Route::resource('users',App\Http\Controllers\UserController::class);
Route::post('/login',[App\Http\Controllers\UserController::class,'login']);
// Route::group(['middleware'=>['auth:sanctum']],function(){

//     Route::post('/login',[App\Http\Controllers\UserController::class,'login']);
  
// });