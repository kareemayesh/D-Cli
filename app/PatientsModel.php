<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientsModel extends Model
{
    protected  $table ='patients';
    protected $fillable = ['name','BirthDate','address','city','sex','telephone'];
    public function DiagnosisVisits(){
        return $this->hasOne('App\DiagnosisVisitsModel', 'patientId');
    }
}

