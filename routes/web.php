<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/history', function () {
    return view('history.index');
})->name('history');

Route::get('/course', function () {
    return view('course.index');
})->name('course');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
