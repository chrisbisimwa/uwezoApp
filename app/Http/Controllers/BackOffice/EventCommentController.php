<?php

namespace App\Http\Controllers\BackOffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Evenement;

class EventCommentController extends Controller{

public function index(Request $request){
        return view('back-office.eventcomments.index');
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