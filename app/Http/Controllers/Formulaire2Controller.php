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
}
