<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ResponController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('userIndex');

Route::get('/admin/home', [HomeController::class, "index"])->name('index')->middleware('auth');
Route::get('/admin/respon', [ResponController::class, "respon"])->name('respon')->middleware('auth');
Route::get('/admin/respon/aduan/{id}', [ResponController::class, "responAduan"])->name('responAduan')->middleware('auth');
Route::get('/admin/detail/aduan/{id}', [ResponController::class, "detail"])->name('detail')->middleware('auth');
Route::get('/admin/respon/aduan/jawab/{id}', [ResponController::class, "jawabAduan"])->name('jawabAduan')->middleware('auth');
Route::post('/admin/insert/respon', [ResponController::class, "insertRespon"])->name('insertRespon')->middleware('auth');
Route::post('/admin/tolak/{id}', [ResponController::class, "tolak"])->name('tolak')->middleware('auth');
Route::post('/admin/terima/{id}', [ResponController::class, "terima"])->name('terima')->middleware('auth');
Route::get('/search', [ResponController::class, "search"])->name('search');

Route::get('/login', [LoginController::class, "login"])->name('login');

Route::post('/admin/kirimAduan', [UserController::class, "aduan"])->name('aduan');
Route::post('/loginproses', [LoginController::class, "loginproses"])->name('loginproses');
Route::get('/logout', [LoginController::class, "logout"])->name('logout');


