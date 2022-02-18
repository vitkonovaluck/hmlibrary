<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\{ANewsController, DashboardController};
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers\Admin','middelware'=>['auth']], function (){
    Route::get('/',[DashboardController::class, 'dashboard'])->name('admin.index');
    Route::resource('/news',  ANewsController::class, ['as'=>'admin']);
    Route::resource('/menu',  AMenuController::class, ['as'=>'admin']);

});

//Route::redirect('/','news');

Route::resource('news',NewsController::class);
