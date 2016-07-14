<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionsModel extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['permission'];
    
}
