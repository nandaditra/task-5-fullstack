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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route get untuk categories
Route::get('/categories', "App\Http\Controllers\CategoryController@index")->name('categories');
Route::get('/categories/tambah', "App\Http\Controllers\CategoryController@tambah");
Route::get('/categories/edit/{id}',"App\Http\Controllers\CategoryController@edit");
Route::get('/categories/hapus/{id}',"App\Http\Controllers\CategoryController@hapus");

//Route post untuk categories
Route::post('/categories/store',"App\Http\Controllers\CategoryController@store");
Route::post('/categories/update',"App\Http\Controllers\CategoryController@update");


//Route get untuk article
Route::get('/articles', "App\Http\Controllers\ArticleController@index")->name('articles');
Route::get('/articles/tambah', "App\Http\Controllers\ArticleController@tambah");
Route::get('/articles/edit/{id}',"App\Http\Controllers\ArticleController@edit");
Route::get('/articles/hapus/{id}',"App\Http\Controllers\ArticleController@hapus");


//Route post untuk article
Route::post('/articles/store',"App\Http\Controllers\ArticleController@store");
Route::post('/articles/update',"App\Http\Controllers\ArticleController@update");

