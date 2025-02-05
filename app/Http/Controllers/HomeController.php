<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    

    public function artistes(){
        $category_id=0;
        return view('front-office.artiste',compact('category_id'));
    }
    
}
