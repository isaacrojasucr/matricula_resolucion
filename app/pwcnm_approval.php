<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pwcnm_approval extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwcnm_approvals';

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
    protected $fillable = ['stade', 'comments', 'fk_user', 'fk_inscription'];
}
