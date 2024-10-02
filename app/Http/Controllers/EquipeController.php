<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\dao\ServiceEquipe;
class EquipeController extends Controller
{
    public function postAjouterEquipe(Request $request){
        try{
            $code = $request->input('code');;
            $nomE = $request->input('nomE');
            $message="";

            $serviceEquipe=new ServiceEquipe();
            $serviceEquipe->ajoutEquipe($code,$nomE);
            return view('home');
        }catch(Exception $e){
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }
    publi_c function listerEquipe(){
        $uneEquipeService = new ServiceEquipe();
        try{
            $mesEquipes = $uneEquipeService->getListeEquipe();
        }
}
}
