<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'name_' => 'Employees',
                'router_link' => 'employees',
                'type_' => 'NAVBAR',
                'status_' => 1,
            ],
            [
                'name_' => 'Nomina',
                'router_link' => 'payroll',
                'type_' => 'NAVBAR',
                'status_' => 1,
            ],
            [
                'name_' => 'Dashboard',
                'router_link' => 'Dashboard',
                'type_' => 'NAVBAR',
                'status_' => 1,
            ],
        ]);
    }
}
