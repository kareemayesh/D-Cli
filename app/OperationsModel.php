<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationsModel extends Model
{
    protected $table = 'operations' ;
    protected $fillable = ['PatientId','VisitNo','OperationType' ,'date'
    ,'teeth','description','notes'];
}
