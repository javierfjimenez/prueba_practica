<?php

namespace Database\Seeders;

use Departments;
use Employees;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Department::class,
            Employee::class,
            Study::class,

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
