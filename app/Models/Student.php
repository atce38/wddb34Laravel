<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['first_name','last_name','id','is_active','age','image'];
}
