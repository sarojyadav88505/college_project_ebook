<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SlideController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.pages.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' =>'admin'],function(){ 
    Route::resource('webblog', BlogController::class);
    Route::resource('webslide', SlideController::class);
    Route::resource('webabout', AboutController::class);
    Route::resource('webaccounts', AccountController::class);
    Route::resource('webnotice', NoticeController::class);
    Route::resource('webdownload', DownloadController::class);
 });
