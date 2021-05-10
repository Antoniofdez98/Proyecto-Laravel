<?php

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

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin');;
    Route::get('heroes', 'App\Http\Controllers\HeroController@index')->name('admin.heroes');
    Route::get('items', 'App\Http\Controllers\ItemController@index')->name('admin.items');
    Route::get('enemies', 'App\Http\Controllers\EnemyController@index')->name('admin.enemies');
});
