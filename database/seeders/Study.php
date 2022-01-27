<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Study extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studies')->insert([
           [
            'employeeId' => 1,
            'studiename' => "Study 1"
           ],
           [
            'employeeId' => 2,
            'studiename' => "Study 2"
           ],
           [
            'employeeId' => 3,
            'studiename' => "Study 3"
           ]
        ]);
    }
}
