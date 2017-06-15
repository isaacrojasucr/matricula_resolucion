<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pwcnm_requirement extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwcnm_requirements';

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
    protected $fillable = ['course', 'grade', 'cycle', 'fk_inscription'];

}
