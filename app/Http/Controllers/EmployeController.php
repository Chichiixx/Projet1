<?php

namespace App\Http\Controllers;

use App\Exceptions\MonException;
use Illuminate\Http\Request;
use Exception;
use App\dao\ServiceEmploye;

class EmployeController extends Controller
{
    public function postAjouterEmploye(Request $request)
    {
        try {
            $civilite = $request->input('civilite');;
            $prenom = $request->input('prenom');
            $nom = $request->input('nom');
            $pwd = $request->input('passe');
            $profil = $request->input('profil');
            $interet = $request->input('interet');
            $message = "";

            $serviceEmploye = new ServiceEmploye();
            $serviceEmploye->ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message);

            return view('home');
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }
    public function listerEmployes(){
        $unEmployeService = new ServiceEmploye();
        try{
            $mesEmployes = $unEmployeService->getListeEmployes();
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view ('vues/error', compact('monErreur'));
        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view('vues/formEmployeLister', compact('mesEmployes'));
    }
    public function modifier($id){
        $serviceEmploye = new ServiceEmploye();
        try{
            $unEmploye=$serviceEmploye->getEmploye($id);
        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        return view('vues/formEmployeModifier', compact('unEmploye'));
    }
    public function postmodifier(Request $request, $id){
        try{
            $civilite = $request->input('civil');;
            $prenom = $request->input('prenom');
            $nom = $request->input('nom');
            $pwd = $request->input('passe');
            $profil = $request->input('profil');
            $interet = $request->input('interet');
            $message = $request->input('le-message');

            $serviceEmploye = new ServiceEmploye();
            $serviceEmploye->modificationEmploye($id,$civilite,$prenom,$nom,$pwd,$profil,$interet,$message);
            return view('home');
        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }

}
