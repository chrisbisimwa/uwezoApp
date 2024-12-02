<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EventController extends Controller
{
    //
    public function evenements()
    {
       return view('front-office.evenements');
    }
}
