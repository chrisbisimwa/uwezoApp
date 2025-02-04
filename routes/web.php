<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficePageController;
use App\Http\Controllers\FrontOfficePageController;
use App\Http\Controllers\BackOffice\BlogController;
use App\Http\Controllers\BackOffice\EventController;
use App\Http\Controllers\BackOffice\EventCategoryController;
use App\Http\Controllers\BackOffice\ArtworkController;
use App\Http\Controllers\BackOffice\ArtworkCategoryController;
use App\Http\Controllers\BackOffice\BlogCategoryController;
use App\Http\Controllers\BackOffice\BlogCommentController;
use Illuminate\Support\Facades\File;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\BlogPost;

Route::get('/', [App\Http\Controllers\FrontOfficePageController::class, 'index'])->name('front.home');



Auth::routes();


//prefixe pour back-office
Route::prefix('back-office')->middleware('auth')->group(function () {
    Route::get('/', [BackOfficePageController::class, 'index'])->name('back-office');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('blog', App\Http\Controllers\BackOffice\BlogController::class);
    Route::resource('artist', App\Http\Controllers\BackOffice\ArtistController::class);
    Route::resource('artist-category', App\Http\Controllers\BackOffice\ArtistCategoryController::class);
    //Route::resource('event', App\Http\Controllers\BackOffice\EventController::class);
    Route::resource('artwork', App\Http\Controllers\BackOffice\ArtworkController::class);
    Route::resource('blog-category', App\Http\Controllers\BackOffice\BlogCategoryController::class);
    Route::resource('blog-comment', App\Http\Controllers\BackOffice\BlogCommentController::class);
    Route::resource('evenement', App\Http\Controllers\BackOffice\EventController::class);
    Route::resource('event-category', App\Http\Controllers\BackOffice\EventCategoryController::class);
    Route::resource('event-comment', App\Http\Controllers\BackOffice\EventCommentController::class);
   // Route::resource('artwork-category', App\Http\Controllers\BackOffice\ArtworkCategoryController::class);
   Route::get('/user/profile', [BackOfficePageController::class, 'profile'])->name('profile');
   
});

Route::redirect('/home', '/');

Route::get('/evenements', [App\Http\Controllers\EventController::class, 'evenements'])->name('front.evenements');
Route::get('/actualite', [App\Http\Controllers\FrontOfficePageController::class, 'blog'])->name('front.blog');
Route::get('/actualite/{slug}', [App\Http\Controllers\FrontOfficePageController::class, 'blogPost'])->name('front.blog-post');


Route::get('/evenements/{id}', [App\Http\Controllers\EventController::class,'eventDetails'])->name('front.event-details');

Route::get('/artistes', [App\Http\Controllers\HomeController::class, 'artistes'])->name('front.artistes');
Route::get('/artistes/{slug}', [App\Http\Controllers\ArtistController::class, 'artisteDetails'])->name('front.artisteDetail');
Route::get('/artistes/category/{slug}', [App\Http\Controllers\ArtistController::class, 'artisteCategory'])->name('front.artisteCategory');

Route::get('nous-contacter', [App\Http\Controllers\FrontOfficePageController::class, 'contact'])->name('front.contact');
Route::get('a-propos', [App\Http\Controllers\FrontOfficePageController::class, 'about'])->name('front.about');

//unsubscribe route
/* Route::get('/unsubscribe', [App\Http\Controllers\NewsletterSubscriptionController::class, 'unsubscribe'])->name('front.unsubscribe'); */

Route::get('/sitemap.xml', function(){
    //file path from storage foleter
    $path = storage_path('app/public/sitemap.xml');
    if(!File::exists($path)){
        \Spatie\Sitemap\SitemapGenerator::create(env('APP_URL'))->writeToFile($path)->writeToFile($path);
    }

    $sitemap= Sitemap::create()
    ->add(Url::create('/')->setPriority(0.1))
    ->add(Url::create('/a-propos')->setPriority(0.1)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY))
    ->add(Url::create('/nous-contacter')->setPriority(0.1)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY))
    ->add(Url::create('/actualite')->setPriority(0.1))
    ->add(Url::create('/evenements')->setPriority(0.1))
    ->add(Url::create('/artistes')->setPriority(0.1));
    
    $blogs = BlogPost::all();
    if($blogs){
        foreach($blogs as $blog){
            $sitemap->add(Url::create(route('front.blog-post', $blog->slug))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        }
    }

    $artists = App\Models\Artist::all();
    if($artists){
        foreach($artists as $artist){
            $sitemap->add(Url::create(route('front.artisteDetail', $artist->slug))->setPriority(0.5)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        }
    }

    $sitemap->writeToFile($path);


    $sitemapContent = file_get_contents($path);
    return response($sitemapContent)->header('Content-Type', 'text/xml');


    //dd($path);
});