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
    return view('index');
})->name(name: 'index');

Route::get('/add', function () {
    return view('add');
})->name(name: 'add');

Route::get('/edit', function () {
    return view('edit');
})->name(name: 'edit');

Route::get('/profile', function () {
    return view('contact-profile');
})->name(name: 'profile');
