<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOfficePageController extends Controller
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
}
