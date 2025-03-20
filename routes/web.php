<?php

use Illuminate\Support\Facades\Route;

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
    return view('acceuil');
});

Route::get('/form', function () {
    return view('form');
});


Route::get('/form', function (Illuminate\Http\Request $request) {
    // Récupérer les données du formulaire
    $nom    = $request->input('nom');
    $prenom = $request->input('prenom');
    $age   = $request->input('age');
    
    // Afficher la vue de récapitulatif avec les données saisies
    return view('confirm', compact('nom','prenom','age'));
});


