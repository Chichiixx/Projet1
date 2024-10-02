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
    return view('home');
});
Route::get('/ajouterEmploye', function(){
    return view('vues/formEmployeAjouter');
});
Route::post('/postEmploye', 'App\Http\Controllers\EmployeController@postAJouterEmploye');
Route::get('listerEmploye', 'App\Http\Controllers\EmployeController@ListerEmployes');
Route::get('/modifierEmploye/{id}','App\Http\Controllers\EmployeController@modifier');
Route::get('/ajouterEquipe', function(){
    return view('vues/formEquipeAjouter');
});
Route::get('listerEquipe', 'App\Http\Controllers\EquipeController@ListerEquipe');
Route::post('/postEquipe', 'App\Http\Controllers\EquipeController@postAjouterEquipe');
