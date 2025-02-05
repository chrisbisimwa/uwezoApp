<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

Class BackOfficePageController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    //
    public function index()
    {
        return view('back-office.index');
    }

    public function profile()
    {
        return view('back-office.profile.show');
    }

    public function updateArtist()
    {
        return view('back-office.update');
    }
}
