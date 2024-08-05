<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttestationDidentileController;
use App\Http\Controllers\DeclarationParticuliereController;
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

Route::get('/attestation-didentile',[AttestationDidentileController::class,'index'])->name('attestation-didentile');
Route::get('/attestation-didentile/add',[AttestationDidentileController::class,'create'])->name('attestation-didentile.create');
Route::get('/attestation-didentile/{id}',[AttestationDidentileController::class,'afficher_pdf'])->name('attestation_didentile.show-pdf');
Route::post('/attestation-didentile/store',[AttestationDidentileController::class,'store'])->name('attestation-didentile.store');
Route::get('/attestation-didentile/{id}/print',[AttestationDidentileController::class,'print'])->name('attestation_didentile.print-pdf');
// Route::resources([
//     'attestation-didentile' => AttestationDidentileController::class
// ]);
Route::get('/declaration-particuliere',[DeclarationParticuliereController::class,'index']);
Route::get('/{page}', [AdminController::class,'index']);
// Route::get('/pdf',function(){
//     return view('templates.attestation-didentite-modele-1');
// });
