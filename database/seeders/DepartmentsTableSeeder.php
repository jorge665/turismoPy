<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departments = [
            ['name' => 'Concepción'],
            ['name' => 'San Pedro'],
            ['name' => 'Cordillera'],
            ['name' => 'Guairá'],
            ['name' => 'Caaguazú'],
            ['name' => 'Caazapá'],
            ['name' => 'Itapúa'],
            ['name' => 'Misiones'],
            ['name' => 'Paraguarí'],
            ['name' => 'Alto Paraná'],
            ['name' => 'Central'],
            ['name' => 'Ñeembucú'],
            ['name' => 'Amambay'],
            ['name' => 'Canindeyú'],
            ['name' => 'Presidente Hayes'],
            ['name' => 'Alto Paraguay'],
            ['name' => 'Boquerón'],
            ['name' => 'Asunción'], // Distrito capital
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
