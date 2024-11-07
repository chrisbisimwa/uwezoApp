<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

Class BlogController extends Controller
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
        return view('back-office.blog.index');
    }
}