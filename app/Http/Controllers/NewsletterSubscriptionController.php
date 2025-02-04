<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

Class NewsletterSubscriptionController extends Controller
{
     

    public function unsubscribe(){
        return view('front-office.unsubscribe');
    }
    
    //
    public function index()
    {
    }

    public function profile()
    {
    }
}