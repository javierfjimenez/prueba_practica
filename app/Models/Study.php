<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'employeeId',
        'studiename',
        
    ];
    // protected  $dates = [
    //     'created_at',
    //     'updated_at',
    // ];
}
