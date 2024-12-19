<?php

namespace App\Http\Controllers;
use App\Models\Artist;
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
        $artiste = Artist::all();
        //dd($artiste);
        return view('front-office.artiste',compact('artiste'));
    }
}
