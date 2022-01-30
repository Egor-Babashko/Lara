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

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'show'])->name('index');
Route::get('/create', [\App\Http\Controllers\ArticleController::class, 'showCreate'])->middleware('auth');
Route::post('/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('create');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/reg', [\App\Http\Controllers\RegController::class, 'showReg'])->name('reg');
    Route::post('/reg', [\App\Http\Controllers\RegController::class, 'addUser'])->name('reg');

    Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'showAuth']);
    Route::post('/auth', [\App\Http\Controllers\AuthController::class,'checkUser'])->name('login');
});

Route::get('logout', function () {
    Auth::Logout();
    return redirect()->route('login');
})->middleware('auth');


Route::get('/article/{id}', [\App\Http\Controllers\ArticleController::class, 'articleGet'])->name('show_one_article');





