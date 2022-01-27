<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Department extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([

            [
                'deptoName' => "Departamento 1"

            ],
            [
                'deptoName' => "Departamento 2"

            ],
            [
                'deptoName' => "Departamento 3"

            ]


        ]);
    }
}
