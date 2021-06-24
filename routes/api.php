<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('posts/search/{title}',[ProductController::class,'search']);
Route::post('/logout',[AuthController::class,'logout']);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::apiResource('products',ProductController::class);
Route::apiResource('categories',CategoryController::class);
Route::apiResource('reviews',ReviewController::class);
Route::prefix('products')->group(function () {

    Route::apiResource('{product}/reviews',ReviewController::class );

});

Route::middleware('auth:sanctum')->group(function () {

});
