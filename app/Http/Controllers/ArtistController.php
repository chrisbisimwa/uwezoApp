<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArtistController extends Controller
{
    
    public function artisteDetails($id){
        $artisteDetail = Artist::findOrFail($id);
        //dd($artisteDetail);
        //$categorie = Category::findOrFail($id);
        $oeuvre = Oeuvre::all()->where('artist_id',$id);
        //dd($oeuvre);
        $dateToDay = date('y-m-d');
        $age = Carbon::parse($artisteDetail->datenaissance)->age;
        //dd($age);
        
        return view('front-office.artisteDetail',compact('artisteDetail','oeuvre','age'));
    }
}
