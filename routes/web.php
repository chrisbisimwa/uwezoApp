<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficePageController;

Route::get('/', [App\Http\Controllers\FrontOfficePageController::class, 'index'])->name('home');



Auth::routes();


Route::get('/back-office', [BackOfficePageController::class, 'index'])->name('back-office');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
