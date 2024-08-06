<?php

namespace App\Http\Controllers;

use App\Models\DeclarationParticuliere;
use App\Models\Personne;
use Illuminate\Http\Request;

class DeclarationParticuliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $declarations = DeclarationParticuliere::all();
        return view('declaration-particuliere',['declarations'=>$declarations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-declaration-particuliere');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $declaration = DeclarationParticuliere::create($request->except(['personne']));
        if($request->personne){
            foreach($request->personne as $personne){
                Personne::create([
                    'declaration_particuliere_id' => $declaration->id,
                    'nom_prenom_registre' => $personne['nom'],
                    'qualite' => $personne['qualite'],
                ]);
            }
        }
        $declarations = DeclarationParticuliere::all();
        return redirect()->route('declaration-particuliere');
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
    public function afficher_pdf($id){
        $attestation = DeclarationParticuliere::find($id);
        return view('templates.attestation-didentite-modele-1',['attestation'=>$attestation]);
    }
    public function print($id){
        $attestation = DeclarationParticuliere::find($id);
        return view('attestation-didentile-print',['attestation'=>$attestation]);
    }
}
