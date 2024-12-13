<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'role', 'email', 'phone', 'country', 'experience', 'join_date'
    ];
}
