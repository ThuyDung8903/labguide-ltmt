<?php

use App\Http\Controllers\HomeController;
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

Route::get('', [HomeController::class, 'index'])->name('home.index');

//Route hiển thị form login
Route::get('login', [HomeController::class, 'login'])->name('home.login');

//Route validate dữ liệu khi update form
Route::post('login', [HomeController::class, 'check_login']);

// route sẽ hiển thị form upload
Route::get('upload', [HomeController::class, 'upload'])->name('home.upload');
// route này validate dữ liệu khi submit form
Route::post('upload', [HomeController::class, 'handle_upload']);
