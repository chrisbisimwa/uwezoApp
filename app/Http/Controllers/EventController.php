<?php

namespace App\Http\Controllers;

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
        return view('front-office.evenement');
    }

    public function eventDetails($title)
    {
        $eventDetails=Evenement::where('title',$title)->first();
        return view('front-office.event-details',compact('eventDetails'));
    }
}
