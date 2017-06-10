<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

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
    protected $fillable = ['initial', 'name', 'period', 'cycle', 'plan', 'carrer'];

    
}
