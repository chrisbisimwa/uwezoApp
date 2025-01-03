<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    
    public function artisteDetails($id){
        $artisteDetail = Artist::find($id);
        dd($artisteDetail);
        return view('front-office.artisteDetail',compact('artisteDetail'));
    }
}
