<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
           [
            "nombres"=> "Employee",
            "apellidos"=> "Apellido",
            "deptoid"=> 3,
            "sexo"=> 1,
            "cedula"=> "00000000000000",
            "direccion"=> "Por ahí",
            "telcasa"=> "00084515951",
            "telmobil"=> "00084515951",
            "salariobase"=> "2020.00",
            "descuentos"=> "2020.00",
            "salarioneto"=> "2020.00",
            "created_at"=> new \DateTime(),
            "updated_at"=> new \DateTime(),
           ],
           [
            "nombres"=> "Employee 2",
            "apellidos"=> "Apellido 2",
            "deptoid"=> 3,
            "sexo"=> 1,
            "cedula"=> "00000000000000",
            "direccion"=> "Por ahí",
            "telcasa"=> "00084515951",
            "telmobil"=> "00084515951",
            "salariobase"=> "2020.00",
            "descuentos"=> "2020.00",
            "salarioneto"=> "2020.00",
            "created_at"=> new \DateTime(),
            "updated_at"=> new \DateTime(),
           ],
           [
            "nombres"=> "Employee 3",
            "apellidos"=> "Apellido 3",
            "deptoid"=> 3,
            "sexo"=> 1,
            "cedula"=> "00000000000000",
            "direccion"=> "Por ahí",
            "telcasa"=> "00084515951",
            "telmobil"=> "00084515951",
            "salariobase"=> "2020.00",
            "descuentos"=> "2020.00",
            "salarioneto"=> "2020.00",
            "created_at"=> new \DateTime(),
            "updated_at"=> new \DateTime(),
           ]
        ]);
    }
}
