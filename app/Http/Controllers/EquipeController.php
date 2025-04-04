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
    public function listerEquipe(){
        $uneEquipeService = new ServiceEquipe();
        try{
            $mesEquipes = $uneEquipeService->getListeEquipe();
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('vues/error',compact('monErreur'));
        }catch (Exception $e){
            $monErreur=$e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view ('vues/formEquipeLister', compact('mesEquipes'));
}
    public function modifier($id){
        $serviceEquipe = new ServiceEquipe();
        try{
            $uneEquipe=$serviceEquipe->getEquipe($id);
        }catch (Exception $e){
            $monErreur=$e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view('vues/formEquipeModifier', compact('uneEquipe'));
    }
    public function postmodifierEquipe(Request $request, $id){
        try{
            $code=$request->input('CodeEq');
            $designation=$request->input('DesiEq');
            $serviceEquipe = new ServiceEquipe();
            $serviceEquipe->modificationEquipe($id,$code,$designation);
            return view('home');
        }catch (Exception $e){
            $monErreur=$e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }
}
