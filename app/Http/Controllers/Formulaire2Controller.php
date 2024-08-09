<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Formulaire2Controller extends Controller
{
        public function index()
        {
            return view('formulaire2');
        }
        public function edit(Request $request)
        {
            $baseUrl = env("DATA_BE");
            $headers = [
                'api_id' => env("API_ID"),
                'api_key' => env("API_KEY"),
            ];
            $response = Http::withHeaders($headers)->get("$baseUrl/".$request->id."/info")->json();
            return view('add-formulaire2',['attestation'=>$response,'id'=>$request->id]);    }

            public function update(Request $request,$id)
            {
        
                // return $request;
                $baseUrl = env("DATA_BE");
                $headers = [
                    'api_id' => env("API_ID"),
                    'api_key' => env("API_KEY"),
                ];
                $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
                $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
                $responseBeforeEdited["identifier"] = isset($request->nom_prenom) ? $request->nom_prenom : null;
                $responseBeforeEdited["nom_actuel"] = isset($request->nom_actuel) ? $request->nom_actuel : null;
                $responseBeforeEdited["nom_nv"] = isset($request->nom_nv) ? $request->nom_nv : null;
                $responseBeforeEdited["sigle"] = isset($request->sigle) ? $request->sigle : null;
                $responseBeforeEdited["juridical_form"]['code'] = isset($request->forme_legal) ? $request->forme_legal : null;
                $responseBeforeEdited["rue"] = isset($request->rue) ? $request->rue : null;
                $responseBeforeEdited["n"] = isset($request->n) ? $request->n : null;
                $responseBeforeEdited["boite"] = isset($request->boite) ? $request->boite : null;
                $responseBeforeEdited["code_postal"] = isset($request->code_postal) ? $request->code_postal : null;
                $responseBeforeEdited["localite"] = isset($request->localite) ? $request->localite : null;
                $responseBeforeEdited["pays"] = isset($request->pays) ? $request->pays : null;

                $responseBeforeEdited["rue2"] = isset($request->rue2) ? $request->rue2 : null;
                $responseBeforeEdited["n2"] = isset($request->n2) ? $request->n2 : null;
                $responseBeforeEdited["boite2"] = isset($request->boite2) ? $request->boite2 : null;
                $responseBeforeEdited["code_postal2"] = isset($request->code_postal2) ? $request->code_postal2 : null;
                $responseBeforeEdited["localite2"] = isset($request->localite2) ? $request->localite2 : null;
                $responseBeforeEdited["pays2"] = isset($request->pays2) ? $request->pays2 : null;

                $responseBeforeEdited["data"][0]['nom'] = isset($request->data[0]['nom']) ? $request->data[0]['nom'] : null;
                $responseBeforeEdited["data"][0]['num_entreprise'] = isset($request->data[0]['num_entreprise']) ? $request->data[0]['num_entreprise'] : null;
                $responseBeforeEdited["data"][1]['nom'] = isset($request->data[1]['nom']) ? $request->data[1]['nom'] : null;
                $responseBeforeEdited["data"][1]['num_entreprise'] = isset($request->data[1]['num_entreprise']) ? $request->data[1]['num_entreprise'] : null;
                $responseBeforeEdited["data"][2]['nom'] = isset($request->data[2]['nom']) ? $request->data[2]['nom'] : null;
                $responseBeforeEdited["data"][2]['num_entreprise'] = isset($request->data[2]['num_entreprise']) ? $request->data[2]['num_entreprise'] : null;

                $responseBeforeEdited["device"] = isset($request->representer_par) ? $request->representer_par : null;
                $responseBeforeEdited["montant"] = isset($request->montant) ? $request->montant : null;
                $responseBeforeEdited["b_date"] = isset($request->b_date) ? $request->b_date : null;
                $responseBeforeEdited["arrive_du_terme"] = isset($request->arrive_du_terme) ? $request->arrive_du_terme : null;
                $responseBeforeEdited["exercice_social"] = isset($request->exercice_social) ? $request->exercice_social : null;
                $responseBeforeEdited["assemblee_generale"] = isset($request->assemblee_generale) ? $request->assemblee_generale : null;
                $responseBeforeEdited["date_de_dissolution"] = isset($request->date_de_dissolution) ? $request->date_de_dissolution : null;
                $responseBeforeEdited["date_de_cloture"] = isset($request->date_de_cloture) ? $request->date_de_cloture : null;
                $responseBeforeEdited["c_nom_registre"] = isset($request->c_nom_registre) ? $request->c_nom_registre : null;

                $responseBeforeEdited["numero_identification"] = isset($request->numero_identification) ? $request->numero_identification : null;
                $responseBeforeEdited["email"] = isset($request->email) ? $request->email : null;
                $responseBeforeEdited["site"] = isset($request->site) ? $request->site : null;
                $responseBeforeEdited["signature_nom"] = isset($request->signature_nom) ? $request->signature_nom : null;
                $responseBeforeEdited["signature_fait_a"] = isset($request->signature_fait_a) ? $request->signature_fait_a : null;
                $responseBeforeEdited["signature_le"] = isset($request->signature_le) ? $request->signature_le : null;
        
                $responseBeforeEdited["admin"][0]['numero'] = isset($request->admin[0]['numero']) ? $request->admin[0]['numero'] : null;
                $responseBeforeEdited["admin"][0]['nom'] = isset($request->admin[0]['nom']) ? $request->admin[0]['nom'] : null;
                $responseBeforeEdited["admin"][0]['qualite'] = isset($request->admin[0]['qualite']) ? $request->admin[0]['qualite'] : null;
                $responseBeforeEdited["admin"][0]['date'] = isset($request->admin[0]['date']) ? $request->admin[0]['date'] : null;
        
                $responseBeforeEdited["admin"][1]['numero'] = isset($request->admin[1]['numero']) ? $request->admin[1]['numero'] : null;
                $responseBeforeEdited["admin"][1]['nom'] = isset($request->admin[1]['nom']) ? $request->admin[1]['nom'] : null;
                $responseBeforeEdited["admin"][1]['qualite'] = isset($request->admin[1]['qualite']) ? $request->admin[1]['qualite'] : null;
                $responseBeforeEdited["admin"][1]['date'] = isset($request->admin[1]['date']) ? $request->admin[1]['date'] : null;
        
                
                $responseBeforeEdited["admin"][2]['numero'] = isset($request->admin[2]['numero']) ? $request->admin[2]['numero'] : null;
                $responseBeforeEdited["admin"][2]['nom'] = isset($request->admin[2]['nom']) ? $request->admin[2]['nom'] : null;
                $responseBeforeEdited["admin"][2]['qualite'] = isset($request->admin[2]['qualite']) ? $request->admin[2]['qualite'] : null;
                $responseBeforeEdited["admin"][2]['date'] = isset($request->admin[2]['date']) ? $request->admin[2]['date'] : null;
        
                
                $responseBeforeEdited["admin"][3]['numero'] = isset($request->admin[3]['numero']) ? $request->admin[3]['numero'] : null;
                $responseBeforeEdited["admin"][3]['nom'] = isset($request->admin[3]['nom']) ? $request->admin[3]['nom'] : null;
                $responseBeforeEdited["admin"][3]['qualite'] = isset($request->admin[3]['qualite']) ? $request->admin[3]['qualite'] : null;
                $responseBeforeEdited["admin"][3]['date'] = isset($request->admin[3]['date']) ? $request->admin[3]['date'] : null;
        
        
                $responseBeforeEdited["gestion"][0]['numero'] = isset($request->gestion[0]['numero']) ? $request->gestion[0]['numero'] : null;
                $responseBeforeEdited["gestion"][0]['nom'] = isset($request->gestion[0]['nom']) ? $request->gestion[0]['nom'] : null;
                $responseBeforeEdited["gestion"][0]['qualite'] = isset($request->gestion[0]['qualite']) ? $request->gestion[0]['qualite'] : null;
                $responseBeforeEdited["gestion"][0]['date'] = isset($request->gestion[0]['date']) ? $request->gestion[0]['date'] : null;
        
                $responseBeforeEdited["gestion"][1]['numero'] = isset($request->gestion[1]['numero']) ? $request->gestion[1]['numero'] : null;
                $responseBeforeEdited["gestion"][1]['nom'] = isset($request->gestion[1]['nom']) ? $request->gestion[1]['nom'] : null;
                $responseBeforeEdited["gestion"][1]['qualite'] = isset($request->gestion[1]['qualite']) ? $request->gestion[1]['qualite'] : null;
                $responseBeforeEdited["gestion"][1]['date'] = isset($request->gestion[1]['date']) ? $request->gestion[1]['date'] : null;
        
                
                $responseBeforeEdited["gestion"][2]['numero'] = isset($request->gestion[2]['numero']) ? $request->gestion[2]['numero'] : null;
                $responseBeforeEdited["gestion"][2]['nom'] = isset($request->gestion[2]['nom']) ? $request->gestion[2]['nom'] : null;
                $responseBeforeEdited["gestion"][2]['qualite'] = isset($request->gestion[2]['qualite']) ? $request->gestion[2]['qualite'] : null;
                $responseBeforeEdited["gestion"][2]['date'] = isset($request->gestion[2]['date']) ? $request->gestion[2]['date'] : null;
        
                
                $responseBeforeEdited["gestion"][3]['numero'] = isset($request->gestion[3]['numero']) ? $request->gestion[3]['numero'] : null;
                $responseBeforeEdited["gestion"][3]['nom'] = isset($request->gestion[3]['nom']) ? $request->gestion[3]['nom'] : null;
                $responseBeforeEdited["gestion"][3]['qualite'] = isset($request->gestion[3]['qualite']) ? $request->gestion[3]['qualite'] : null;
                $responseBeforeEdited["gestion"][3]['date'] = isset($request->gestion[3]['date']) ? $request->gestion[3]['date'] : null;
                return view('templates.formulaire2',['attestation'=>$responseBeforeEdited]);
            }
            public function updatePrint(Request $request,$id){
                $baseUrl = env("DATA_BE");
                $headers = [
                    'api_id' => env("API_ID"),
                    'api_key' => env("API_KEY"),
                ];
                $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
                $responseBeforeEdited = Http::withHeaders($headers)->get("$baseUrl/".$id."/info")->json();
                $responseBeforeEdited["identifier"] = isset($request->nom_prenom) ? $request->nom_prenom : null;
                $responseBeforeEdited["nom_actuel"] = isset($request->nom_actuel) ? $request->nom_actuel : null;
                $responseBeforeEdited["nom_nv"] = isset($request->nom_nv) ? $request->nom_nv : null;
                $responseBeforeEdited["sigle"] = isset($request->sigle) ? $request->sigle : null;
                $responseBeforeEdited["juridical_form"]['code'] = isset($request->forme_legal) ? $request->forme_legal : null;
                $responseBeforeEdited["rue"] = isset($request->rue) ? $request->rue : null;
                $responseBeforeEdited["n"] = isset($request->n) ? $request->n : null;
                $responseBeforeEdited["boite"] = isset($request->boite) ? $request->boite : null;
                $responseBeforeEdited["code_postal"] = isset($request->code_postal) ? $request->code_postal : null;
                $responseBeforeEdited["localite"] = isset($request->localite) ? $request->localite : null;
                $responseBeforeEdited["pays"] = isset($request->pays) ? $request->pays : null;

                $responseBeforeEdited["rue2"] = isset($request->rue2) ? $request->rue2 : null;
                $responseBeforeEdited["n2"] = isset($request->n2) ? $request->n2 : null;
                $responseBeforeEdited["boite2"] = isset($request->boite2) ? $request->boite2 : null;
                $responseBeforeEdited["code_postal2"] = isset($request->code_postal2) ? $request->code_postal2 : null;
                $responseBeforeEdited["localite2"] = isset($request->localite2) ? $request->localite2 : null;
                $responseBeforeEdited["pays2"] = isset($request->pays2) ? $request->pays2 : null;

                $responseBeforeEdited["data"][0]['nom'] = isset($request->data[0]['nom']) ? $request->data[0]['nom'] : null;
                $responseBeforeEdited["data"][0]['num_entreprise'] = isset($request->data[0]['num_entreprise']) ? $request->data[0]['num_entreprise'] : null;
                $responseBeforeEdited["data"][1]['nom'] = isset($request->data[1]['nom']) ? $request->data[1]['nom'] : null;
                $responseBeforeEdited["data"][1]['num_entreprise'] = isset($request->data[1]['num_entreprise']) ? $request->data[1]['num_entreprise'] : null;
                $responseBeforeEdited["data"][2]['nom'] = isset($request->data[2]['nom']) ? $request->data[2]['nom'] : null;
                $responseBeforeEdited["data"][2]['num_entreprise'] = isset($request->data[2]['num_entreprise']) ? $request->data[2]['num_entreprise'] : null;

                $responseBeforeEdited["device"] = isset($request->representer_par) ? $request->representer_par : null;
                $responseBeforeEdited["montant"] = isset($request->montant) ? $request->montant : null;
                $responseBeforeEdited["b_date"] = isset($request->b_date) ? $request->b_date : null;
                $responseBeforeEdited["arrive_du_terme"] = isset($request->arrive_du_terme) ? $request->arrive_du_terme : null;
                $responseBeforeEdited["exercice_social"] = isset($request->exercice_social) ? $request->exercice_social : null;
                $responseBeforeEdited["assemblee_generale"] = isset($request->assemblee_generale) ? $request->assemblee_generale : null;
                $responseBeforeEdited["date_de_dissolution"] = isset($request->date_de_dissolution) ? $request->date_de_dissolution : null;
                $responseBeforeEdited["date_de_cloture"] = isset($request->date_de_cloture) ? $request->date_de_cloture : null;
                $responseBeforeEdited["c_nom_registre"] = isset($request->c_nom_registre) ? $request->c_nom_registre : null;

                $responseBeforeEdited["numero_identification"] = isset($request->numero_identification) ? $request->numero_identification : null;
                $responseBeforeEdited["email"] = isset($request->email) ? $request->email : null;
                $responseBeforeEdited["site"] = isset($request->site) ? $request->site : null;
                $responseBeforeEdited["signature_nom"] = isset($request->signature_nom) ? $request->signature_nom : null;
                $responseBeforeEdited["signature_fait_a"] = isset($request->signature_fait_a) ? $request->signature_fait_a : null;
                $responseBeforeEdited["signature_le"] = isset($request->signature_le) ? $request->signature_le : null;
        
                $responseBeforeEdited["admin"][0]['numero'] = isset($request->admin[0]['numero']) ? $request->admin[0]['numero'] : null;
                $responseBeforeEdited["admin"][0]['nom'] = isset($request->admin[0]['nom']) ? $request->admin[0]['nom'] : null;
                $responseBeforeEdited["admin"][0]['qualite'] = isset($request->admin[0]['qualite']) ? $request->admin[0]['qualite'] : null;
                $responseBeforeEdited["admin"][0]['date'] = isset($request->admin[0]['date']) ? $request->admin[0]['date'] : null;
        
                $responseBeforeEdited["admin"][1]['numero'] = isset($request->admin[1]['numero']) ? $request->admin[1]['numero'] : null;
                $responseBeforeEdited["admin"][1]['nom'] = isset($request->admin[1]['nom']) ? $request->admin[1]['nom'] : null;
                $responseBeforeEdited["admin"][1]['qualite'] = isset($request->admin[1]['qualite']) ? $request->admin[1]['qualite'] : null;
                $responseBeforeEdited["admin"][1]['date'] = isset($request->admin[1]['date']) ? $request->admin[1]['date'] : null;
        
                
                $responseBeforeEdited["admin"][2]['numero'] = isset($request->admin[2]['numero']) ? $request->admin[2]['numero'] : null;
                $responseBeforeEdited["admin"][2]['nom'] = isset($request->admin[2]['nom']) ? $request->admin[2]['nom'] : null;
                $responseBeforeEdited["admin"][2]['qualite'] = isset($request->admin[2]['qualite']) ? $request->admin[2]['qualite'] : null;
                $responseBeforeEdited["admin"][2]['date'] = isset($request->admin[2]['date']) ? $request->admin[2]['date'] : null;
        
                
                $responseBeforeEdited["admin"][3]['numero'] = isset($request->admin[3]['numero']) ? $request->admin[3]['numero'] : null;
                $responseBeforeEdited["admin"][3]['nom'] = isset($request->admin[3]['nom']) ? $request->admin[3]['nom'] : null;
                $responseBeforeEdited["admin"][3]['qualite'] = isset($request->admin[3]['qualite']) ? $request->admin[3]['qualite'] : null;
                $responseBeforeEdited["admin"][3]['date'] = isset($request->admin[3]['date']) ? $request->admin[3]['date'] : null;
        
        
                $responseBeforeEdited["gestion"][0]['numero'] = isset($request->gestion[0]['numero']) ? $request->gestion[0]['numero'] : null;
                $responseBeforeEdited["gestion"][0]['nom'] = isset($request->gestion[0]['nom']) ? $request->gestion[0]['nom'] : null;
                $responseBeforeEdited["gestion"][0]['qualite'] = isset($request->gestion[0]['qualite']) ? $request->gestion[0]['qualite'] : null;
                $responseBeforeEdited["gestion"][0]['date'] = isset($request->gestion[0]['date']) ? $request->gestion[0]['date'] : null;
        
                $responseBeforeEdited["gestion"][1]['numero'] = isset($request->gestion[1]['numero']) ? $request->gestion[1]['numero'] : null;
                $responseBeforeEdited["gestion"][1]['nom'] = isset($request->gestion[1]['nom']) ? $request->gestion[1]['nom'] : null;
                $responseBeforeEdited["gestion"][1]['qualite'] = isset($request->gestion[1]['qualite']) ? $request->gestion[1]['qualite'] : null;
                $responseBeforeEdited["gestion"][1]['date'] = isset($request->gestion[1]['date']) ? $request->gestion[1]['date'] : null;
        
                
                $responseBeforeEdited["gestion"][2]['numero'] = isset($request->gestion[2]['numero']) ? $request->gestion[2]['numero'] : null;
                $responseBeforeEdited["gestion"][2]['nom'] = isset($request->gestion[2]['nom']) ? $request->gestion[2]['nom'] : null;
                $responseBeforeEdited["gestion"][2]['qualite'] = isset($request->gestion[2]['qualite']) ? $request->gestion[2]['qualite'] : null;
                $responseBeforeEdited["gestion"][2]['date'] = isset($request->gestion[2]['date']) ? $request->gestion[2]['date'] : null;
        
                
                $responseBeforeEdited["gestion"][3]['numero'] = isset($request->gestion[3]['numero']) ? $request->gestion[3]['numero'] : null;
                $responseBeforeEdited["gestion"][3]['nom'] = isset($request->gestion[3]['nom']) ? $request->gestion[3]['nom'] : null;
                $responseBeforeEdited["gestion"][3]['qualite'] = isset($request->gestion[3]['qualite']) ? $request->gestion[3]['qualite'] : null;
                $responseBeforeEdited["gestion"][3]['date'] = isset($request->gestion[3]['date']) ? $request->gestion[3]['date'] : null;
                
                return view('formulaire2-print',['attestation'=>$responseBeforeEdited]);
            }
}
