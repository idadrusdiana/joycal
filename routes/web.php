<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\flat7Controller;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StoreController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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


// Route::get('/sendemail', [emailController::class, 'index']);
// Route::get('/joycal_hanazono', [PublicController::class, 'home']);
// Route::post('/send-response-flat7', [PublicController::class, 'sendResponseFlat7']);
// Route::post('/send-response-flat7', [PublicController::class, 'sendResponseFlat7']);

Route::post('/send-response', [PublicController::class, 'sendResponse']);

Route::get('/apply/{store}', [PublicController::class, 'home']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'home']);
    Route::get('/responses', [AdminController::class, 'responses']);
    Route::get('/change-status/{id}', [AdminController::class, 'changeStatus']);       
    Route::group(['middleware' => 'superadmin'], function () {
        Route::get('/account', [AccountController::class, 'index']);
        Route::post('/account/create',[AccountController::class, 'create']);
    });
});

// Route::group(['middleware'=>['auth']], function(){
    Route::get('/store', [StoreController::class, 'home']);



Route::get('/admin/response/{id}', [AdminController::class, 'print']);
Route::view('/admin/print', 'admin.print');
