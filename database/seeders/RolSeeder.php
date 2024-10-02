<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'ADMIN',
                'description' => 'Administrador del sistema, posee todos los permisos'
            ],
            [
                'name' => 'USER',
                'description' => 'Usuario del sistema, posee permisos básicos para visualizar, comentar y crear contenido de contenido creado por el administrador o colaboradores'
            ],
            [
                'name' => 'COLLABORATOR',
                'description' => 'Colaborador del sistema, posee permisos para crear contenido y visualizar contenido creado por el administrador'
            ],
        ];

        foreach ($roles as $rol) {
            Rol::create($rol);
        }

    }
}
