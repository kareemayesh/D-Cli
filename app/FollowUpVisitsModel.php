<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowUpVisitsModel extends Model
{
    protected $table = 'followupvisits' ;
    protected  $fillable = ['PatientId','FolloUpNo','date','notes'];
}
