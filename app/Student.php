<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{	
    protected $fillable = ['nisn', 'first_name', 'last_name', 'address', 'age', 'email'];
}
