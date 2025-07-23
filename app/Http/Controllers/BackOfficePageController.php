<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\BlogPost;
use App\Models\Evenement;
use App\Models\User;
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
    $users = User::count();
    $events = Evenement::count();
    $blogs = BlogPost::count();
    $artists = Artist::count();

    $recentBlogs = BlogPost::whereIn('status', ['draft', 'published'])
        ->latest()
        ->take(6)
        ->get();

    $recentEvents = Evenement::whereIn('status', ['upcoming', 'ongoing'])
        ->latest()
        ->take(5)
        ->get();

    $totalOeuvres = Artist::with('oeuvres')
        ->get()
        ->sum(function ($artist) {
            return $artist->oeuvres->count();
        });

    return view('back-office.index', 
    compact('users', 'events', 'blogs', 'artists', 'recentBlogs', 'recentEvents', 'totalOeuvres')
);
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
