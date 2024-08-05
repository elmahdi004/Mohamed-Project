<?php

namespace App\Http\Controllers;

use App\Models\AttestationDidentile;
use Illuminate\Http\Request;

class AttestationDidentileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(AttestationDidentile $attestationDidentile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttestationDidentile $attestationDidentile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttestationDidentile $attestationDidentile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttestationDidentile $attestationDidentile)
    {
        //
    }
    public function afficher_pdf($id){
        return view('templates.attestation-didentite-modele-1');
    }
}
