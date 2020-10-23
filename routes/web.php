<?php

use Illuminate\Support\Facades\Artisan;
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

//Funcion de ruta por defecto
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache', function(){
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "Cache limpio";
})->name('cache');

Auth::routes();


Route::resource('users','UserController');


Route::get('/home', 'HomeController@index')->name('home');
