<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficePageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/back-office', [BackOfficePageController::class, 'index'])->name('back-office');
