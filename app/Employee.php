<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $fillable = ['email','name','address','contact'];
    protected $primaryKey = 'id';
}
