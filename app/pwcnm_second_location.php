<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pwcnm_second_location extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwcnm_second_locations';

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
    protected $fillable = ['name'];

    
}
