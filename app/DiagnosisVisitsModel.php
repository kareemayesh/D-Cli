<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosisVisitsModel extends Model
{
    protected  $table = "diagnosisvisits";
    protected $fillable = ['patientId','VisitNo','reason','date','notes'];

    public function patient(){
        return   $this->belongsTo('App\PatientsModel', 'id');
    }
}
