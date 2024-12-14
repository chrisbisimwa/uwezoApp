<?php

namespace App\Http\Controllers\BackOffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Evenement;

class EventCategoryController extends Controller{
    
    public function index(Request $request){
      
        return view("back-office.eventcategory.index");
    }
  
    public function create()
    {
        //

        return view('back-office.evenement.createvent');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Evenement::where('slug', $id)->first();
        return view('back-office.evenement.editevent', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}