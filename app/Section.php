<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Section extends Model
{
    public function getListSection() {
        return DB::select('select s.ID_SECCION, s.NOMBRE, u.name, u.lastname, u.email, u.phone from PWCNM_SECCION as s INNER JOIN users as u ON s.ID_CONTACTO = u.id ORDER BY s.ID_SECCION');
    }

    public function insertSection($name, $inCharge)
    {
    	DB::insert('insert into PWCNM_SECCION (NOMBRE, ID_CONTACTO) values (?, ?)', [$name, $inCharge]);
    }

    public function deleteSection($id)
    {
    	DB::delete('delete from PWCNM_SECCION where ID_SECCION = ?', [$id]);
    }

    public function getSection($id)
    {
        return DB::select('select s.ID_SECCION, s.NOMBRE, u.id, u.name from PWCNM_SECCION as s INNER JOIN users as u ON s.ID_CONTACTO = u.id WHERE ID_SECCION = ?', [$id]);
    }

    public function editSection($name, $inCharge, $id)
    {
        DB::update('update PWCNM_SECCION set NOMBRE = ?, ID_CONTACTO = ? where ID_SECCION = ?', [$name, $inCharge, $id]);
    }
}
