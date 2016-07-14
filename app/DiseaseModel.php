<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiseaseModel extends Model
{
    protected $table = 'disease' ;
    protected $fillable = ['DiseasName'];
}
