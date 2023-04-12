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
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/sample', function () {
    return view('sample');
})->name('sample');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');

Route::get('/header', function () {
    return view('header');
})->name('header');