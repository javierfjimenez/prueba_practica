<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'nombres',
        'apellidos',
        'deptoid',
        'sexo',
        'cedula',
        'direccion',
        'telcasa',
        'telmobil',
        'salariobase',
        'descuentos',
        'salarioneto',
    ];
    // protected  $dates = [
    //     'created_at',
    //     'updated_at',
    // ];
}
