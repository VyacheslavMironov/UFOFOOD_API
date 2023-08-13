<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostProductController;
use App\Http\Controllers\Admin\PostProfileController;
use App\Http\Controllers\Admin\PostUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [MainController::class, 'login']);

Route::post('/user/code/', [PostUserController::class, 'newCode'])
    ->name('user.code');

Route::post('/user/login/', [PostUserController::class, 'login'])
    ->name('user.post.login');

Route::post('/user/logout/', [PostUserController::class, 'logout'])
    ->name('user.post.logout');

Route::prefix('profiles')->group(function () {
    Route::get('/', [MainController::class, 'profile'])
        ->name('profiles.index');

    Route::post('/create', [PostProfileController::class, 'create'])
        ->name('create.profiles');

    Route::get('/show/{id}', [MainController::class, 'show'])
        ->name('profiles.show');

    Route::get('/products', [MainController::class, 'products'])
        ->name('products.index');

    Route::get('/products/create', [MainController::class, 'products_create'])
        ->name('products.products_create');

    Route::get('/products/update/{id}', [MainController::class, 'products_update'])
        ->name('products.products_update');
        
    Route::post('/products/create', [PostProductController::class, 'create'])
        ->name('products.create');

    Route::post('/products/update', [PostProductController::class, 'update'])
        ->name('products.update');

    Route::post('/products/delete', [PostProductController::class, 'delete'])
        ->name('products.delete');
});

Route::get('/login', [MainController::class, 'login']);

Route::post('/user/code/', [PostUserController::class, 'newCode'])
    ->name('user.code');

Route::post('/user/login/', [PostUserController::class, 'login'])
    ->name('user.post.login');
