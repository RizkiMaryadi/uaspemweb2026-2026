<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API ROUTES
|--------------------------------------------------------------------------
| Semua route di file ini otomatis punya prefix /api
| Contoh akses: http://localhost:8000/api/products
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| TEST API
|--------------------------------------------------------------------------
*/
Route::get('/ping', function () {
    return response()->json([
        'status' => 'API is running 🚀'
    ]);
});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (WAJIB TOKEN LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | USER INFO
    |--------------------------------------------------------------------------
    */
    Route::get('/me', function (Request $request) {
        return response()->json($request->user());
    });

    Route::post('/logout', [AuthController::class, 'logout']);


    /*
    |--------------------------------------------------------------------------
    | USER CRUD
    |--------------------------------------------------------------------------
    */
    Route::apiResource('users', UserController::class);


    /*
    |--------------------------------------------------------------------------
    | PRODUCT CRUD
    |--------------------------------------------------------------------------
    */
    Route::apiResource('products', ProductController::class);


    /*
    |--------------------------------------------------------------------------
    | ORDER CRUD
    |--------------------------------------------------------------------------
    */
    Route::apiResource('orders', OrderController::class);

});
