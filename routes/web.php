<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'PostController@home')->name('home');

Route::get('hello', function () {
    return view('hello');
});
Route::get('create', 'PostController@create')->name('create');
Route::get('show', 'PostController@show')->name('show');
Route::post('store', 'PostController@store')->name('store');

Route::resource('views', 'PostController', ['only' => ['index','create','store']]);

Route::get('index', 'PostController@index')->name('index');

