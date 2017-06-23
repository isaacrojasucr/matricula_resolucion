<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Section extends Model
{
    public function getListSection() {
    	//return DB::select('select NOMBRE, ENCARGADO, CONTACTO, NUMERO from PWCNM_SECCION');
        return DB::select('select s.NOMBRE, u.name, u.email, u.phone from PWCNM_SECCION as s INNER JOIN users as u ON s.ID_CONTACTO = u.id');
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