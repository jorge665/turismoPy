<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'collaborator']);
        Role::create(['name' => 'user']);

        $roles = [
            [
                'name' => 'admin',
                'description' => 'Administrador del sistema, posee todos los permisos'
            ],
            [
                'name' => 'user',
                'description' => 'Usuario del sistema, posee permisos básicos para visualizar, comentar y crear contenido de contenido creado por el administrador o colaboradores'
            ],
            [
                'name' => 'collaborator',
                'description' => 'Colaborador del sistema, posee permisos para crear contenido y visualizar contenido creado por el administrador'
            ],
        ];

        foreach ($roles as $rol) {
            Rol::create($rol);
        }

    }
}
