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
        


     

         //dd($blogPost->getDynamicSEOData());
        return view('front-office.blog-post', compact('blogPost'));
    }

    public function contact()
    {
        return view('front-office.contact');
    }

    public function about()
    {
        return view('front-office.about');
    }
}
