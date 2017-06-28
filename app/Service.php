<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{

    public function getListService()
    {
        return DB::select('select ID_SERVICIO, NOMBRE, DESCRIPCION, ROL, ARCHIVO from PWCNM_SERVICIO ORDER BY NOMBRE ASC');
    }

    public function insertService($name, $desc, $rol, $file)
    {
        DB::insert('insert into PWCNM_SERVICIO (NOMBRE, DESCRIPCION, ROL, ARCHIVO) values (?, ?, ?, ?)', [$name, $desc, $rol, $file]);
    }

    public function deleteService($id)
    {
        DB::delete('delete from PWCNM_SERVICIO where ID_SERVICIO = ?', [$id]);
    }

    public function getListServiceByRol($rol)
    {
        return DB::select('select NOMBRE, DESCRIPCION, ARCHIVO from PWCNM_SERVICIO WHERE ROL = ? ORDER BY NOMBRE ASC', [$rol]);
    }

    public function getService($id)
    {
        return DB::select('select ID_SERVICIO, NOMBRE, ROL, DESCRIPCION, ARCHIVO from PWCNM_SERVICIO WHERE ID_SERVICIO = ?', [$id]);
    }

    public function editService($name, $desc, $rol, $fileName, $id)
    {
        if ($fileName == '') {
            DB::update('update PWCNM_SERVICIO set NOMBRE = ?, DESCRIPCION = ?, ROL = ? where ID_SERVICIO = ?', [$name, $desc, $rol, $id]);
        } else {
            DB::update('update PWCNM_SERVICIO set NOMBRE = ?, DESCRIPCION = ?, ROL = ?, ARCHIVO = ? where ID_SERVICIO = ?', [$name, $desc, $rol, $fileName, $id]);
        }
    }
}
