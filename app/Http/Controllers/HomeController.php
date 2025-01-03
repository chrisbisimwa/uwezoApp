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
        $artiste = Artist::all();
        $categorie = Category::all();
        //$categorieArtist = Category::select(name = )
        //dd($categorie);
        return view('front-office.artiste',compact('artiste','categorie'));
    }
    
}
