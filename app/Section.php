<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Section extends Model
{
    public function getListSection() {
    	return DB::select('select NOMBRE, ENCARGADO, CONTACTO, NUMERO from PWCNM_SECCION');
    }

    public function insertSection($name, $inCharge, $email, $number)
    {
    	DB::insert('insert into PWCNM_SECCION (NOMBRE, ENCARGADO, CONTACTO, NUMERO) values (?, ?, ?, ?)', [$name, $inCharge, $email, $number]);
    }

    public function deleteSection($id)
    {
    	DB::delete('delete from PWCNM_SECCION where ID_SECCION = ?', [$id]);
    }
}
