<?php

namespace App\Http\Controllers;

use App\Models\Formulaire1;
use Illuminate\Http\Request;

class Formulaire1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulaire');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-formulaire');
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
    public function show(Formulaire1 $formulaire1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulaire1 $formulaire1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulaire1 $formulaire1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulaire1 $formulaire1)
    {
        //
    }
}
