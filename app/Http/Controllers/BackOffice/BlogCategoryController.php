<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

Class BlogCategoryController extends Controller
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


    
    
}