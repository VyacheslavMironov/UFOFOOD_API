<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
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
