<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttestationDidentileController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// Route::resources([
//     'attestation-didentile' => AttestationDidentileController::class
// ]);
Route::get('/attestation-didentile/{id}',[AttestationDidentileController::class,'afficher_pdf'])->name('attestation_didentile.show-pdf');
Route::get('/{page}', [AdminController::class,'index']);
// Route::get('/pdf',function(){
//     return view('templates.attestation-didentite-modele-1');
// });
