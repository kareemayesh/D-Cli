<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permissionslinksModel extends Model
{
    protected $table = 'permissionslinks' ;
    protected $fillable = ['permissionId','link'];
    
}
