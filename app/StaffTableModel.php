<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffTableModel extends Model
{
    protected $table = 'staff' ;
    protected $fillable = ['name','DateOfBirth','JobTitle','sex','telephone','securityLevel'];

}
