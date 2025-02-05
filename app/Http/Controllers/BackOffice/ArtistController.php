<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       

        return view('back-office.artist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('back-office.artist.create');
    }

    /**
     * Show the form for update a new resource.
     */
    public function update(string $id)
    {
        //

        return view('back-office.artist.update', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back-office.artist.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back-office.artist.edit');
    }

    /**
     * Update the specified resource in storage.
     
    *public function update(Request $request, string $id)
    *{
     *   //
    *} 
        */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
