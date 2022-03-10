<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AIndexController;
use App\Http\Controllers\Admin\ANewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create someting great!
|
*/
////, 'middleware' => ['auth']
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/',[AIndexController::class,'index'])->name('admin.index');
    Route::get('/news',[ANewsController::class,'index'])->name('admin.news.index');
    Route::get('/news/create',[ANewsController::class,'create'])->name('admin.news.create');
    Route::get('/news/edit',[ANewsController::class,'edit'])->name('admin.news.edit');
    Route::get('/news/update',[ANewsController::class,'update'])->name('admin.news.update');
});



Route::get('/', [IndexController::class, 'index']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
