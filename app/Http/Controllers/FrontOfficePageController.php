<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class FrontOfficePageController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front-office.index');
    }

    public function blog()
    {
        return view('front-office.blog');
    }

    public function blogPost($slug)
    {
        //get host url
        
        
        $blogPost = BlogPost::where('slug', $slug)->first();
        $share_buttons = \Share::page(
            'https://www.laravelclick.com/post/laravel-10-social-media-share-buttons-integration-tutorial',
            'How to Add Social Media Share Button in Laravel 10 App?'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->reddit();
        $view_data['share_buttons'] = $share_buttons;


     

         //dd($blogPost->getDynamicSEOData());
        return view('front-office.blog-post', compact('blogPost'))->with($view_data);
    }

    public function contact()
    {
        return view('front-office.contact');
    }
}
