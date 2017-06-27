<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    /*public function getListSection() {
        return DB::select('select s.ID_SECCION, s.NOMBRE, u.name, u.email, u.phone from PWCNM_SECCION as s INNER JOIN users as u ON s.ID_CONTACTO = u.id ORDER BY s.ID_SECCION');
    }

    public function getSection($id)
    {
        return DB::select('select s.ID_SECCION, s.NOMBRE, u.id, u.name from PWCNM_SECCION as s INNER JOIN users as u ON s.ID_CONTACTO = u.id WHERE ID_SECCION = ?', [$id]);
    }

    public function editSection($name, $inCharge, $id)
    {
        DB::update('update PWCNM_SECCION set NOMBRE = ?, ID_CONTACTO = ? where ID_SECCION = ?', [$name, $inCharge, $id]);
    }*/

    public function getListService()
    {
        return DB::select('select ID_SERVICIO, NOMBRE, DESCRIPCION, ROL, ARCHIVO from PWCNM_SERVICIO ORDER BY NOMBRE ASC');
    }

    public function insertSection($name, $desc, $rol, $file)
    {
        DB::insert('insert into PWCNM_SERVICE (NOMBRE, DESCRIPCION, ROL, ARCHIVO) values (?, ?, ?, ?)', [$name, $desc, $rol, $file]);
    }

    public function deleteService($id)
    {
        DB::delete('delete from PWCNM_SERVICE where ID_SERVICIO = ?', [$id]);
    }

    public function getListServiceByRol($rol)
    {
        return DB::select('select NOMBRE, DESCRIPCION, ARCHIVO from PWCNM_SERVICIO WHERE ROL = ? ORDER BY NOMBRE ASC', [$rol]);
    }
}
