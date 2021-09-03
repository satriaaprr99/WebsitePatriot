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

Auth::routes();

Route::get('/', [App\Http\Livewire\Home::class, '__invoke'])->name('home');
Route::get('product', [App\Http\Livewire\ProductIndex::class, '__invoke'])->name('product');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'auth'], function () {
      Route::get('/admin', 'AdminController@index')->name('admin');
    });
});