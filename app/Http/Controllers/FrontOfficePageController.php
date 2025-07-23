<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

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

    public function blog()
    {
        return view('front-office.blog');
    }

    public function blogPost($slug)
    {
        //get host url


        $blogPost = BlogPost::where('slug', $slug)->first();


        $seo = $blogPost->getDynamicSEOData();
        return view('front-office.blog-post', compact('blogPost', 'seo'));
    }

    public function contact()
    {
        return view('front-office.contact');
    }

    public function about()
    {
        return view('front-office.about');
    }

    public function ajaxSearch(Request $request)
    {
        $q = $request->input('q', '');

        // On vérifie que la requête n'est pas vide
        if (empty($q)) {
            return response()->json(['html' => '<div>Veuillez entrer un terme de recherche.</div>']);
        }

        // On vérifie que les modèles existent et on protège les accès aux relations
        $artists = \App\Models\Artist::where('nom', 'like', "%{$q}%")
            ->orWhere('prenom', 'like', "%{$q}%")
            ->take(5)->get();

        $oeuvres = \App\Models\Oeuvre::where('nom', 'like', "%{$q}%")
            ->orWhere('description', 'like', "%{$q}%")
            ->take(5)->get();

        $evenements = \App\Models\Evenement::where('title', 'like', "%{$q}%")
            ->orWhere('description', 'like', "%{$q}%")
            ->take(5)->get();

        $blogPosts = \App\Models\BlogPost::where('title', 'like', "%{$q}%")
            ->orWhere('content', 'like', "%{$q}%")
            ->take(5)->get();

        // On évite une erreur si la vue n'existe pas !
        try {
            $html = view('front-office.partials.search-results', compact('artists', 'oeuvres', 'evenements', 'blogPosts', 'q'))->render();
        } catch (\Exception $e) {
            return response()->json(['html' => '<div>Erreur lors de la génération du résultat : ' . $e->getMessage() . '</div>']);
        }

        return response()->json(['html' => $html]);
    }
}
