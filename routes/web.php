<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
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

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

// Route::grou(['middleware' => '']);
Route::get('/admin', [AdminController::class, 'home']);
Route::get('/admin/responses', [AdminController::class, 'responses']);
Route::get('/admin/change-status/{id}', [AdminController::class, 'changeStatus']);

Route::get('/account', [AccountController::class, 'index']);

Route::get('/', [PublicController::class, 'home']);
Route::post('/send-response', [PublicController::class, 'sendResponse']);

