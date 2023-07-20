<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('menu')->group(function () {
    Route::post('category/create', [\App\Http\Controllers\Api\MenuCategoryController::class, 'create']);
    Route::get('category/delete/{caegory_id}', [\App\Http\Controllers\Api\MenuCategoryController::class, 'delete']);
    Route::get('category', [\App\Http\Controllers\Api\MenuCategoryController::class, 'all']);

    Route::post('create', [\App\Http\Controllers\Api\MenuController::class, 'create']);
    Route::post('update', [\App\Http\Controllers\Api\MenuController::class, 'update']);
    Route::get('show/to/category/{menu_category_id}', [\App\Http\Controllers\Api\MenuController::class, 'showToCategory']);
    Route::get('show/{menu_id}', [\App\Http\Controllers\Api\MenuController::class, 'show']);
    Route::get('/', [\App\Http\Controllers\Api\MenuController::class, 'all']);
    Route::get('delete/{menu_id}', [\App\Http\Controllers\Api\MenuController::class, 'delete']);
});

Route::prefix('user')->group(function () {
    Route::post('code', [\App\Http\Controllers\Api\UserController::class, 'code']);
    Route::post('create', [\App\Http\Controllers\Api\UserController::class, 'create']);
    Route::post('auth', [\App\Http\Controllers\Api\UserController::class, 'auth']);
    Route::get('show/by/phone/{phone}', [\App\Http\Controllers\Api\UserController::class, 'showByPhone']);
    Route::post('update', [\App\Http\Controllers\Api\UserController::class, 'update']);
});