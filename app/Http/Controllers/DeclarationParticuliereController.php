<?php

namespace App\Http\Controllers;

use App\Models\DeclarationParticuliere;
use Illuminate\Http\Request;

class DeclarationParticuliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('templates.declaration-particuliere');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(DeclarationParticuliere $declarationParticuliere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeclarationParticuliere $declarationParticuliere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeclarationParticuliere $declarationParticuliere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeclarationParticuliere $declarationParticuliere)
    {
        //
    }
}
