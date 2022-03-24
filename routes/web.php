<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StaticController;

use App\Http\Controllers\Admin\AIndexController;
use App\Http\Controllers\Admin\ANewsController;
use App\Http\Controllers\Admin\AMenuController;

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
    Route::get('/news/edit/{type}',[ANewsController::class,'edit'])->name('admin.news.edit');
    Route::get('/news/edit',[ANewsController::class,'edit'])->name('admin.news.edit');
    Route::get('/news/store',[ANewsController::class,'store'])->name('admin.news.store');
    Route::post('/news/store',[ANewsController::class,'store'])->name('admin.news.store');
    Route::post('/news/update',[ANewsController::class,'update'])->name('admin.news.update');
    Route::get('/news/search',[ANewsController::class,'search'])->name('admin.news.search');

    Route::get('/menu',[AMenuController::class,'index'])->name('admin.menu.index');
    Route::get('/menu/create',[AMenuController::class,'create'])->name('admin.menu.create');
    Route::get('/menu/search',[AMenuController::class,'search'])->name('admin.menu.search');
    Route::get('/menu/edit',[AMenuController::class,'edit'])->name('admin.menu.edit');
    Route::get('/menu/store',[AMenuController::class,'store'])->name('admin.menu.store');
    Route::get('/menu/update',[AMenuController::class,'store'])->name('admin.menu.update');



    ////select routes//////////////////////
    Route::get('/select/virtual/index',[AMenuController::class,'index'])->name('admin.menu.index');

});



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/show', [NewsController::class, 'show'])->name('news.show');
Route::get('/static', [StaticController::class, 'show'])->name('static.index');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
