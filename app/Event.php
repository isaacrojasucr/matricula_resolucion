<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{    
    public function getListEvents()
    {
        return DB::select('select ID_EVENTO, NOMBRE, DESCRIPCION, ROL, FECHA_INICIO, FECHA_FINAL from PWCNM_EVENTO ORDER BY ID_EVENTO ASC');
    }

    public function insertEvent($name, $desc, $rol, $start_date, $end_date)
    {
        DB::insert('insert into PWCNM_EVENTO (NOMBRE, DESCRIPCION, ROL, FECHA_INICIO, FECHA_FINAL) values (?, ?, ?, ?, ?)', [$name, $desc, $rol, $start_date, $end_date]);
    }

    public function deleteEvent($id)
    {
        DB::delete('delete from PWCNM_EVENTO where ID_EVENTO = ?', [$id]);
    }

    public function getListEventByRol($rol)
    {
        return DB::select('select NOMBRE, DESCRIPCION, FECHA_INICIO, FECHA_FINAL from PWCNM_EVENTO WHERE ROL = ? ORDER BY NOMBRE ASC', [$rol]);
    }

    public function getEvent($id)
    {
        return DB::select('select ID_EVENTO, NOMBRE, ROL, DESCRIPCION, FECHA_INICIO, FECHA_FINAL from PWCNM_EVENTO WHERE ID_EVENTO = ?', [$id]);
    }

    public function editEvent($name, $desc, $rol, $start_date, $end_date, $id)
    {
        DB::update('update PWCNM_EVENTO set NOMBRE = ?, DESCRIPCION = ?, ROL = ?, FECHA_INICIO = ?, FECHA_FINAL = ? where ID_EVENTO = ?', [$name, $desc, $rol, $start_date, $end_date, $id]);
    }
}
