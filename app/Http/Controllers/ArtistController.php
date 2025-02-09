<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Oeuvre;
use App\Models\Media;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArtistController extends Controller
{
    
    public function artisteDetails($slug){
        $artisteDetail = Artist::where('slug', $slug)->first();
        //dd($artisteDetail);
        //$categorie = Category::findOrFail($id);
        $oeuvre = Oeuvre::all()->where('artist_id',$artisteDetail->id);
        //dd($oeuvre);
        $media = Media::all()->where('mediaable_id', $artisteDetail->id);
        $dateToDay = date('y-m-d');
        $age = Carbon::parse($artisteDetail->datenaissance)->age;
        //dd($age);
        $event = Evenement::all()->where('artist_id', $artisteDetail->id);
        $eventComing = Evenement::all()->where('artist_id', $artisteDetail->id);
        //dd($event);
        return view('front-office.artisteDetail',compact('artisteDetail','oeuvre','age','media','event'));
    }

    function getYouTubeVideoId($url) {
        preg_match('/(?:youtu\.be\/|youtube\.com\/(?:.*v=|embed\/|v\/))([^&?\/]+)/', $url, $matches);
        return $matches[1] ?? null;
    }

    public function eventComing($id){
        
        $event = Evenement::all()->where('artist_id', $id);
        $eventComing = Evenement::all()->where('artist_id', $id);
        //dd($event);
        return view('front-office.eventComingArtist',compact('event'));
    }


    public function artisteCategory($slug){

        $category_id = Category::where('slug', $slug)->first()->id;
       
        return view('front-office.artiste', compact('category_id'));
        
    }
}
