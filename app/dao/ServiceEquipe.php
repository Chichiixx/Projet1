<?php

namespace App\dao;
use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;
class ServiceEquipe
{
    public function ajoutEquipe($code, $nomE){
        try{
            DB::table('equipe')->insert(
                ['codeEq'=>$code, 'DesiEq'=>$nomE]
            );
        }catch (\Illuinate\Database\QueyException $e){
            throw new MonException($e->getMessage(),5);
        }
    }
    public function getListeEquipe(){
        try{
            $mesEquipes = DB::table('Equipe')
                ->Select()
                ->get();
            return $mesEquipes;
        }catch (\Illuminate\Database\QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
}
