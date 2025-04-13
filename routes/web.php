<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SidbaarController;
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
/*Route::get('create', [AdminController::class, 'create'])->name('create');
Route::post('store', [AdminController::class, 'store'])->name('store');
Route::post('/', [CategorieController::class, 'index'])->name('index');*/
Route::get('/home/{id}', [HomeController::class, 'show'])->name('show');
Route::post('/admin.create/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/admin.create/{id}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/admin.create/{id}', [HomeController::class, 'destroy'])->name('home.destroy');
Route::get('/', [HomeController::class, 'index'])->name('admin.index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/explore', [HomeController::class, 'explore'])->name('explore');
Route::get('/trending', [HomeController::class, 'trending'])->name('trending');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/admin/edit', [HomeController::class, 'edit']);
Route::get('/create', [HomeController::class, 'create'])->name('admin.create');
Route::get('/sidbar', [HomeController::class, 'index'])->name('layouts.SidBaar');
Route::post('/store', [HomeController::class, 'store'])->name('admin.store');
Route::get('/search', [HomeController::class, 'search'])->name('homes.search');
Route::get('/SidBaar', [HomeController::class, 'SidBaar'])->name('layouts.SidBaar');

Route::get('/List', [HomeController::class, 'SidBaar'])->name('admin.List');
Route::get('/List_message', [MessageController::class, 'index'])->name('users.List_message');
Route::get('/create_message', [MessageController::class, 'index'])->name('users.create_message');
Route::post('/store2', [MessageController::class, 'store'])->name('users.store');
Route::get('/create2', [MessageController::class, 'create'])->name('users.create');



