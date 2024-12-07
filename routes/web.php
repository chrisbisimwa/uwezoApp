<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficePageController;
use App\Http\Controllers\FrontOfficePageController;
use App\Http\Controllers\BackOffice\BlogController;
use App\Http\Controllers\BackOffice\BlogCategoryController;
use App\Http\Controllers\BackOffice\EventController;
use App\Http\Controllers\BackOffice\EventCategoryController;
use App\Http\Controllers\BackOffice\ArtworkController;
use App\Http\Controllers\BackOffice\ArtworkCategoryController;

Route::get('/', [App\Http\Controllers\FrontOfficePageController::class, 'index'])->name('front.home');



Auth::routes();


//prefixe pour back-office
Route::prefix('back-office')->middleware('auth')->group(function () {
    Route::get('/', [BackOfficePageController::class, 'index'])->name('back-office');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('blog', App\Http\Controllers\BackOffice\BlogController::class);
    //Route::resource('event', App\Http\Controllers\BackOffice\EventController::class);
    //Route::resource('artwork', App\Http\Controllers\BackOffice\ArtworkController::class);
    //Route::resource('blog-category', App\Http\Controllers\BackOffice\BlogCategoryController::class);
    //Route::resource('event-category', App\Http\Controllers\BackOffice\EventCategoryController::class);
   // Route::resource('artwork-category', App\Http\Controllers\BackOffice\ArtworkCategoryController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/evenements', [App\Http\Controllers\EventController::class, 'evenements'])->name('evenements');
Route::get('/blog', [App\Http\Controllers\FrontOfficePageController::class, 'blog'])->name('front.blog');
Route::get('/blog/{slug}', [App\Http\Controllers\FrontOfficePageController::class, 'blogPost'])->name('front.blog-post');

Route::get('/evenements', [App\Http\Controllers\EventController::class, 'evenements'])->name('front.evenements');


Route::get('/artistes', [App\Http\Controllers\HomeController::class, 'artistes'])->name('front.artistes');

Route::get('nous-contacter', [App\Http\Controllers\FrontOfficePageController::class, 'contact'])->name('front.contact');
