<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pwcnm_inscriptionRequest extends Model
{
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwcnm_inscription_requests';

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
    protected $fillable = ['studentId',
                           'studentName',
                            'phone',
                            'email',
                            'weightedAverage',
                            'fk_course',
                            'group',
                            'timesAttended',
                            'observations',
                            'fk_process',
                            'fk_career',
                            'fk_location'];
}
