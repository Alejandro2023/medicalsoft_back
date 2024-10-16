<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name_' => 'Juan Pérez',
                'userDNI' => '123456789',
                'role' => 'Gerente',
                'salary' => 5000.00,
                'join_date' => '2022-01-15',
            ],
            [
                'name_' => 'Juan Pérez',
                'userDNI' => '123456789',
                'role' => 'Gerente',
                'salary' => 5000.00,
                'join_date' => '2022-01-15',
            ],
            [
                'name_' => 'Juan Pérez',
                'userDNI' => '123456789',
                'role' => 'Gerente',
                'salary' => 5000.00,
                'join_date' => '2022-01-15',
            ],
        ]);
    }
}
