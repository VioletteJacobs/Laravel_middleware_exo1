<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\UserController;
use App\Models\Backoffice;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('article', ArticleController::class);
Route::resource('backoffice', BackofficeController::class);
Route::resource('users', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
