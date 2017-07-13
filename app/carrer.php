<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class carrer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'carrers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['initial', 'name', 'page', 'plan', 'manager'];

    public function getListCareer() {
        return DB::select('select c.name, c.plan, u.name AS encargado, u.email, u.lastname, u.phone FROM carrers AS c INNER JOIN users AS u ON c.manager = u.id');
    }
}
