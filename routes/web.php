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

Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name(name:'index');

Route::get('/add', [App\Http\Controllers\ContactController::class, 'create'])->name(name:'add');

Route::get('/edit', [App\Http\Controllers\ContactController::class, 'edit'])->name(name:'edit');

Route::get('/profile', [App\Http\Controllers\ContactController::class, 'show'])->name(name:'profile');

Route::resource('contact', App\Http\Controllers\ContactController::class);
