<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

Class BackOfficePageController extends Controller
{
    //
    public function index()
    {
        return view('back-office.index');
    }
}
