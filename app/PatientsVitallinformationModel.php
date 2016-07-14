<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientsVitallinformationModel extends Model
{
    protected $table = 'patientsvitalinformation';
    protected $fillable = ['PatientId','DiseaseId','Diagnosis'];
}
