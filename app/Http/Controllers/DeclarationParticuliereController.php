<?php

namespace App\Http\Controllers;

use App\Models\DeclarationParticuliere;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class DeclarationParticuliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
    
        // Making API requests
        $response1 = Http::withHeaders($headers)->get("$baseUrl/201552538/info")->json();
        $response2 = Http::withHeaders($headers)->get("$baseUrl/202239951/info")->json();
        $response3 = Http::withHeaders($headers)->get("$baseUrl/403170701/info")->json();
    
        // Collect responses
        $data = [$response1, $response2, $response3];
        return view('declaration-particuliere',['declarations'=>$data]);
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
    public function edit($id)
    {
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $response = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        return view('add-declaration-particuliere',['attestation'=>$response,'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        $responseBeforeEdited["identifier"] = isset($request->num_entreprise) ? $request->num_entreprise : null;
        $responseBeforeEdited['denomination'] = isset($request->denomation_sociale) ? $request->denomation_sociale : null;
        $responseBeforeEdited["juridical_form"]['code'] = isset($request->forme_legale) ? $request->forme_legale : null;
        $responseBeforeEdited["juridical_situation"]['code'] = isset($request->siege_social) ? $request->siege_social : null;
        $responseBeforeEdited["company_name"] = isset($request->representer_par) ? $request->representer_par : null;
        $responseBeforeEdited["fait_a"] = isset($request->fait_a) ? $request->fait_a : null;
        $responseBeforeEdited["en_date_du"] = isset($request->en_date_du) ? $request->en_date_du : null;
        $responseBeforeEdited["personnes"][0]['nom_prenom_registre'] = isset($request->personne[0]['nom']) ? $request->personne[0]['nom'] : null;
        $responseBeforeEdited["personnes"][0]['qualite'] = isset($request->personne[0]['qualite']) ? $request->personne[0]['qualite'] : null;
        $responseBeforeEdited["personnes"][1]['nom_prenom_registre'] = isset($request->personne[1]['nom']) ? $request->personne[1]['nom'] : null;
        $responseBeforeEdited["personnes"][1]['qualite'] = isset($request->personne[1]['qualite']) ? $request->personne[1]['qualite'] : null;
        $responseBeforeEdited["personnes"][2]['nom_prenom_registre'] = isset($request->personne[2]['nom']) ? $request->personne[2]['nom'] : null;
        $responseBeforeEdited["personnes"][2]['qualite'] = isset($request->personne[2]['qualite']) ? $request->personne[2]['qualite'] : null;
        return view('templates.declaration-particuliere',['attestation'=>$responseBeforeEdited]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeclarationParticuliere $declarationParticuliere)
    {
        //
    }
    public function afficher_pdf($id){
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $response = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        return view('templates.declaration-particuliere',['attestation'=>$response]);
    }
    public function print($id){
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $response = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        return view('declaration-particuliere-print',['attestation'=>$response]);
    }
    public function updatePrint(Request $request,$id){
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        $responseBeforeEdited["identifier"] = isset($request->num_entreprise) ? $request->num_entreprise : null;
        $responseBeforeEdited['denomination'] = isset($request->denomation_sociale) ? $request->denomation_sociale : null;
        $responseBeforeEdited["juridical_form"]['code'] = isset($request->forme_legale) ? $request->forme_legale : null;
        $responseBeforeEdited["juridical_situation"]['code'] = isset($request->siege_social) ? $request->siege_social : null;
        $responseBeforeEdited["company_name"] = isset($request->representer_par) ? $request->representer_par : null;
        $responseBeforeEdited["fait_a"] = isset($request->fait_a) ? $request->fait_a : null;
        $responseBeforeEdited["en_date_du"] = isset($request->en_date_du) ? $request->en_date_du : null;
        $responseBeforeEdited["personnes"][0]['nom_prenom_registre'] = isset($request->personne[0]['nom']) ? $request->personne[0]['nom'] : null;
        $responseBeforeEdited["personnes"][0]['qualite'] = isset($request->personne[0]['qualite']) ? $request->personne[0]['qualite'] : null;
        $responseBeforeEdited["personnes"][1]['nom_prenom_registre'] = isset($request->personne[1]['nom']) ? $request->personne[1]['nom'] : null;
        $responseBeforeEdited["personnes"][1]['qualite'] = isset($request->personne[1]['qualite']) ? $request->personne[1]['qualite'] : null;
        $responseBeforeEdited["personnes"][2]['nom_prenom_registre'] = isset($request->personne[2]['nom']) ? $request->personne[2]['nom'] : null;
        $responseBeforeEdited["personnes"][2]['qualite'] = isset($request->personne[2]['qualite']) ? $request->personne[2]['qualite'] : null;
        return view('declaration-particuliere-print',['attestation'=>$responseBeforeEdited]);
    }
}
