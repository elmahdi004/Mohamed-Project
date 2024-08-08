<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttestationDidentileController;
use App\Http\Controllers\DeclarationParticuliereController;
use App\Http\Controllers\Formulaire1Controller;
use App\Models\DeclarationParticuliere;
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
Route::get('/attestation-didentile/{id}/edit',[AttestationDidentileController::class,'edit'])->name('attestation_didentile.edit');
Route::get('/attestation-didentile/{id}',[AttestationDidentileController::class,'afficher_pdf'])->name('attestation_didentile.show-pdf');
Route::post('/attestation-didentile/{id}/update',[AttestationDidentileController::class,'update'])->name('attestation-didentile.update');
Route::post('/attestation-didentile/{id}/update-print',[AttestationDidentileController::class,'updatePrint'])->name('attestation-didentile.update-print');
Route::get('/attestation-didentile/{id}/print',[AttestationDidentileController::class,'print'])->name('attestation_didentile.print-pdf');
// Route::resources([
//     'attestation-didentile' => AttestationDidentileController::class
// ]);


Route::get('/declaration-particuliere',[DeclarationParticuliereController::class,'index'])->name('declaration-particuliere');
Route::post('/declaration-particuliere/edit',[DeclarationParticuliereController::class,'edit'])->name('declaration-particuliere.edit');
Route::post('/declaration-particuliere/store',[DeclarationParticuliereController::class,'store'])->name('declaration-particuliere.store');
Route::get('/declaration-particuliere/{id}/print',[DeclarationParticuliereController::class,'print'])->name('declaration-particuliere.print-pdf');
Route::get('/declaration-particuliere/{id}',[DeclarationParticuliereController::class,'afficher_pdf'])->name('declaration-particuliere.show-pdf');
Route::post('/declaration-particuliere/{id}/update',[DeclarationParticuliereController::class,'update'])->name('declaration-particuliere.update');
Route::post('/declaration-particuliere/{id}/update-print',[DeclarationParticuliereController::class,'updatePrint'])->name('declaration-particuliere.update-print');


Route::get('/formulaire',[Formulaire1Controller::class,'index'])->name('formulaire');
Route::get('/formulaire/add',[Formulaire1Controller::class,'create'])->name('formulaire.create');
Route::post('/formulaire/store',[Formulaire1Controller::class,'store'])->name('formulaire.store');
Route::get('/formulaire/{id}/print',[Formulaire1Controller::class,'print'])->name('formulaire.print-pdf');
Route::get('/formulaire/{id}',[Formulaire1Controller::class,'afficher_pdf'])->name('formulaire.show-pdf');



Route::get('/{page}', [AdminController::class,'index']);
// Route::get('/pdf',function(){
//     return view('templates.attestation-didentite-modele-1');
// });
