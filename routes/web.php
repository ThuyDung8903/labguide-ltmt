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

Route::get('/', function () {
    return view('demos');
});
//Route::get('/demo', function (){
//    echo '<h1>Đây là phương thức get</h1>';
//    echo '<h2>Link: '.url('demo').'</h2>';
//});

Route::post('/demo', function () {
    echo '<h1>Đây là phương thức post</h1>';
    echo '<h2>Link: ' . url('demo') . '</h2>';
});
Route::get('', [HomeController::class, 'index'])->name('home.index');

//Route::get('/product', function () {
//    return view('products');
//});

Route::get('', [HomeController::class, 'listProduct'])->name('home.products');

Route::get('/banner', [HomeController::class, 'listBanner'])->name('home.banner');