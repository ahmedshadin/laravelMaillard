<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sitecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Sitecontroller::class, 'index'])->name('home');
Route::get('/about', [Sitecontroller::class, 'about'])->name('about');
Route::get('/menu', [Sitecontroller::class, 'menu'])->name('menu');
Route::get('/reservations', [Sitecontroller::class, 'reservation'])->name('res');
