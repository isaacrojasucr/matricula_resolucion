<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Career extends Model
{
    public function getListCareer() {
    	return DB::select('select NOMBRE, ENCARGADO, CONTACTO, NUMERO from PWCNM_CARRERA');
    }
}
