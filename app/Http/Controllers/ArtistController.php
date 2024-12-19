<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    
    public function artisteDetails(){
        $artisteDetail = Artist::all();
        //dd($artiste);
        return view('front-office.artisteDetail',compact('artisteDetail'));
    }
}
