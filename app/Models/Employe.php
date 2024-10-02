<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Employe extends Model
{
    protected $table = 'employe';
    protected $primaryKey='numEmploye';
    public $timestamps=false;
}
