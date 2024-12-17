<?php

namespace App\Http\Controllers\BackOffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Evenement;

class EventCommentController extends Controller{

public function index(Request $request){
     $search = $request->get('search', '');
        $events = Evenement::orderBy("created_at","desc")->paginate(10);
        $posts = Evenement::search($search)
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('back-office.evenement.index', compact('posts', 'search'));
}

public function create()
    {
        //

        return view('back-office.evenement.createvent');
    }
public function store(Request $request){

}
public function show($id){
    $event = Evenement::find($id);
}
public function edit($id){
    $post = Evenement::where('slug', $id)->first();
    return view('back-office.evenement.editevent', compact('post'));
}
public function update(Request $request, $id){

}
}