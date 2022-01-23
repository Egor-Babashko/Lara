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

//Route::view('/', 'pages.both.article');
//Route::view('/', 'pages.user.create_article');

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'getArticle']);

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::get('/create', [\App\Http\Controllers\ArticleController::class, 'showCreate']);
Route::post('/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('create');


Route::view('/reg', 'pages.both.reg')->name('reg');

Route::view('/auth', 'pages.both.auth')->name('auth');



