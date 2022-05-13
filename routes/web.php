<?php


use
    Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\VirtualController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ImageUploadController;

use App\Http\Controllers\Admin\AIndexController;
use App\Http\Controllers\Admin\ANewsController;
use App\Http\Controllers\Admin\APlanController;
use App\Http\Controllers\Admin\AMenuController;
use App\Http\Controllers\Admin\AGaleryController;
use App\Http\Controllers\Admin\AVirtualController;
use App\Http\Controllers\Admin\AStaticController;


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
    Route::post('/news/store',[ANewsController::class,'store'])->name('admin.news.store');
    Route::post('/news/update',[ANewsController::class,'update'])->name('admin.news.update');
    Route::get('/news/search',[ANewsController::class,'search'])->name('admin.news.search');

    Route::get('/menu',[AMenuController::class,'index'])->name('admin.menu.index');
    Route::get('/menu/create',[AMenuController::class,'create'])->name('admin.menu.create');
    Route::get('/menu/search',[AMenuController::class,'search'])->name('admin.menu.search');
    Route::get('/menu/edit',[AMenuController::class,'edit'])->name('admin.menu.edit');
    Route::post('/menu/store',[AMenuController::class,'store'])->name('admin.menu.store');
    Route::post('/menu/update',[AMenuController::class,'update'])->name('admin.menu.update');

    Route::get('/static',[AStaticController::class,'index'])->name('admin.static.index');
    Route::get('/static/create',[AStaticController::class,'create'])->name('admin.static.create');
    Route::get('/static/edit',[AStaticController::class,'edit'])->name('admin.static.edit');
    Route::post('/static/store',[AStaticController::class,'store'])->name('admin.static.store');
    Route::post('/static/update',[AStaticController::class,'update'])->name('admin.static.update');
    Route::get('/static/search',[AStaticController::class,'search'])->name('admin.static.search');

    Route::get('/plan',[APlanController::class,'index'])->name('admin.plan.index');
    Route::get('/plan/create',[APlanController::class,'create'])->name('admin.plan.create');
    Route::get('/plan/edit',[APlanController::class,'edit'])->name('admin.plan.edit');
    Route::post('/plan/store',[APlanController::class,'store'])->name('admin.plan.store');
    Route::post('/plan/update',[APlanController::class,'update'])->name('admin.plan.update');
    Route::get('/plan/destroy',[APlanController::class,'destroy'])->name('admin.plan.delete');



    ////select routes//////////////////////
    Route::get('/select/virtual/index',[AMenuController::class,'index']);
    Route::get('/select/galery/show',[AGaleryController::class,'showselect']);
    Route::get('/select/galery/index',[AGaleryController::class,'indexselect']);
    Route::get('/select/static/show',[AStaticController::class,'showselect']);
    Route::get('/select/static/index',[AStaticController::class,'indexselect']);
    Route::get('/select/news/show',[ANewsController::class,'showselect']);
    Route::get('/select/menu/show',[AMenuController::class,'showselect']);
    Route::get('/select/news/index',[ANewsController::class,'indexselect']);

    //UPLOAD IMAGE routes
    Route::get('upload-image', [ImageUploadController::class, 'index' ]);
    Route::post('upload-image', [ImageUploadController::class, 'store' ])->name('image.store');
});



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/tag', [NewsController::class, 'index'])->name('news.tag');
Route::get('/news/show', [NewsController::class, 'show'])->name('news.show');
Route::get('/static', [StaticController::class, 'index'])->name('static');
Route::get('/static', [StaticController::class, 'index'])->name('static.index');
Route::get('/static/show', [StaticController::class, 'show'])->name('static.show');
Route::get('/static/delete', [StaticController::class, 'update'])->name('index.php');
Route::get('/static/delete', [StaticController::class, 'update'])->name('static.delete');
Route::get('/plan', [PlanController::class, 'index'])->name('plan.index');
Route::get('/virtual', [VirtualController::class, 'index'])->name('virtual.index');
Route::get('/menu/show', [MenuController::class, 'show'])->name('menu.show');


//UPLOAD IMAGE routes
Route::get('upload-image', [ImageUploadController::class, 'index' ]);
Route::post('upload-image', [ImageUploadController::class, 'store' ])->name('image.store');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
