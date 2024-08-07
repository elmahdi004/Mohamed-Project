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
        // return $data[0];
        return view('attestation-didentile', ['attestations' => $data]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-attestation-didentile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attestations = AttestationDidentile::all();
        AttestationDidentile::create($request->all());
        return view('attestation-didentile',['attestations'=>$attestations]);
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
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $response = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        return view('templates.attestation-didentite-modele-1',['attestation'=>$response]);
    }
    public function print($id){
        $baseUrl = env("DATA_BE");
        $headers = [
            'api_id' => env("API_ID"),
            'api_key' => env("API_KEY"),
        ];
        $response = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
        return view('attestation-didentile-print',['attestation'=>$response]);
    }
}
