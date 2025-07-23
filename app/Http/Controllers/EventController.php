<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\BlogPost;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EventController extends Controller
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

    public function create(Request $request){

    }
    

    public function evenements(){
        return view('front-office.events.evenement');
    }

    public function eventDetails($title)
    {
        $eventDetails=Evenement::where('title',$title)->first();
        $artistId= $eventDetails->artist_id;
        $artists= Artist::find($artistId);
        $events= Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])->latest()->paginate(3);
        $blogPosts = BlogPost::where('status', 'published')->latest()->paginate(4);
        return view('front-office.events.event-details',compact('eventDetails','events','blogPosts','artists','seo'));
    }
}
