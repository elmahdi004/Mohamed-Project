<?php

namespace App\Http\Controllers;

use App\Models\AttestationDidentile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AttestationDidentileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('attestation-didentile');
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $attestations = AttestationDidentile::all();
    //     AttestationDidentile::create($request->all());
    //     return view('attestation-didentile',['attestations'=>$attestations]);
    // }

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
    public function edit(Request $request)
    {
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $response = Http::withHeaders($headers)->get("$baseUrl/".$request->id."/info")->json();
        return view('add-attestation-didentile',['attestation'=>$response,'id'=>$request->id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // {
        //     "_token": "W4GVL9EEpcwxM1Bu48PVbuuO6Hos28DLyF55Ub0S",
        //     "tel": null,
        //     "agissant_societe": null,
        //     "agissant_societe_asbl": null,
        //     "qualite": null,
        //     "constitution": "1",
        //     "nomination": "1",
        //     "demission": "1",
        //     "transfert": "1",
        //     "autre_modification": "1",
        //     "autre_modification_value": null,
        //     "en_date_du": "2024-08-14"
        //     }
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        $responseBeforeEdited["company_name"] = isset($request->nom_prenom) ? $request->nom_prenom : null;
        $responseBeforeEdited['company_names'][0]['start_date'] = isset($request->date_de_naissance) ? $request->date_de_naissance : null;
        $responseBeforeEdited["addresses"][0]['municipality'] = isset($request->place_de_naissance) ? $request->place_de_naissance : null;
        $responseBeforeEdited["identifier"] = isset($request->num_registre_national) ? $request->num_registre_national : null;
        $responseBeforeEdited["domicilie"] = isset($request->domicilie) ? $request->domicilie : null;
        $responseBeforeEdited["phone_number"] = isset($request->tel) ? $request->tel : null;
        $responseBeforeEdited["agissant_societe"] = isset($request->agissant_societe) ? $request->agissant_societe : null;
        $responseBeforeEdited["agissant_societe_asbl"] = isset($request->agissant_societe_asbl) ? $request->agissant_societe_asbl : null;
        $responseBeforeEdited["qualite"] = isset($request->qualite) ? $request->qualite : null;
        $responseBeforeEdited["constitution"] = isset($request->constitution) ? $request->constitution : null;
        $responseBeforeEdited["nomination"] = isset($request->nomination) ? $request->nomination : null;
        $responseBeforeEdited["demission"] = isset($request->demission) ? $request->demission : null;
        $responseBeforeEdited["transfert"] = isset($request->transfert) ? $request->transfert : null;
        $responseBeforeEdited["autre_modification"] = isset($request->autre_modification) ? $request->autre_modification : null;
        $responseBeforeEdited["autre_modification_value"] = isset($request->autre_modification_value) ? $request->autre_modification_value : null;
        $responseBeforeEdited["en_date_du"] = isset($request->en_date_du) ? $request->en_date_du : null;

        return view('templates.attestation-didentite-modele-1',['attestation'=>$responseBeforeEdited]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttestationDidentile $attestationDidentile)
    {
        //
    }

    public function updatePrint(Request $request,$id){
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        $responseBeforeEdited["company_name"] = isset($request->nom_prenom) ? $request->nom_prenom : null;
        $responseBeforeEdited['company_names'][0]['start_date'] = isset($request->date_de_naissance) ? $request->date_de_naissance : null;
        $responseBeforeEdited["addresses"][0]['municipality'] = isset($request->place_de_naissance) ? $request->place_de_naissance : null;
        $responseBeforeEdited["identifier"] = isset($request->num_registre_national) ? $request->num_registre_national : null;
        $responseBeforeEdited["domicilie"] = isset($request->domicilie) ? $request->domicilie : null;
        $responseBeforeEdited["phone_number"] = isset($request->tel) ? $request->tel : null;
        $responseBeforeEdited["agissant_societe"] = isset($request->agissant_societe) ? $request->agissant_societe : null;
        $responseBeforeEdited["agissant_societe_asbl"] = isset($request->agissant_societe_asbl) ? $request->agissant_societe_asbl : null;
        $responseBeforeEdited["qualite"] = isset($request->qualite) ? $request->qualite : null;
        $responseBeforeEdited["constitution"] = isset($request->constitution) ? $request->constitution : null;
        $responseBeforeEdited["nomination"] = isset($request->nomination) ? $request->nomination : null;
        $responseBeforeEdited["demission"] = isset($request->demission) ? $request->demission : null;
        $responseBeforeEdited["transfert"] = isset($request->transfert) ? $request->transfert : null;
        $responseBeforeEdited["autre_modification"] = isset($request->autre_modification) ? $request->autre_modification : null;
        $responseBeforeEdited["autre_modification_value"] = isset($request->autre_modification_value) ? $request->autre_modification_value : null;
        $responseBeforeEdited["en_date_du"] = isset($request->en_date_du) ? $request->en_date_du : null;

        return view('attestation-didentile-print',['attestation'=>$responseBeforeEdited]);
    }
}
