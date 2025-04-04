<?php

namespace App\dao;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;
use function Laravel\Prompts\select;

class ServiceEquipe
{
    public function ajoutEquipe($code, $designation){
        try{
            DB::table('equipe')->insert(
                ['codeEq'=>$code, 'DesiEq'=>$designation]
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
    public function getEquipe($id){
        try {
            $uneEquipe = DB::table('Equipe')
                ->select()
                ->where('Id','=', $id)
                ->first();
            return $uneEquipe;
        }catch (\Illuminate\Database\QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
    public function modificationEquipe($id, $code, $designation){
        try{
            DB::table('Equipe')->where('Id', $id)
                ->update([
                    'Id'=>$id,
                    'CodeEq'=>$code,
                    'Desieq'=>$designation
                ]);
        }catch (QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }

}
