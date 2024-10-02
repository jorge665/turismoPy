<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Department;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        $cities = [
            // Departamento de Concepción
            [
                'department' => 'Concepción',
                'cities' => [
                    ['name' => 'Concepción'],
                    ['name' => 'Horqueta'],
                    ['name' => 'Loreto'],
                    ['name' => 'Belén'],
                    ['name' => 'Yby Yaú'],
                    ['name' => 'Azotey'],
                    ['name' => 'San Carlos del Apa'],
                    ['name' => 'Sargento José Félix López'],
                    ['name' => 'San Lázaro'],
                    ['name' => 'Paso Barreto'],
                ],
            ],
            // Departamento de San Pedro
            [
                'department' => 'San Pedro',
                'cities' => [
                    ['name' => 'San Pedro de Ycuamandiyú'],
                    ['name' => 'Antequera'],
                    ['name' => 'Choré'],
                    ['name' => 'General Elizardo Aquino'],
                    ['name' => 'Guayaibí'],
                    ['name' => 'Itacurubí del Rosario'],
                    ['name' => 'Liberación'],
                    ['name' => 'Lima'],
                    ['name' => 'Nueva Germania'],
                    ['name' => 'San Estanislao'],
                    ['name' => 'Tacuatí'],
                    ['name' => 'Unión'],
                    ['name' => 'Villa del Rosario'],
                    ['name' => 'Yataity del Norte'],
                    ['name' => 'Yrybucuá'],
                    ['name' => '25 de Diciembre'],
                ],
            ],
            // Departamento de Cordillera
            [
                'department' => 'Cordillera',
                'cities' => [
                    ['name' => 'Caacupé'],
                    ['name' => 'Altos'],
                    ['name' => 'Arroyos y Esteros'],
                    ['name' => 'Atyrá'],
                    ['name' => 'Emboscada'],
                    ['name' => 'Eusebio Ayala'],
                    ['name' => 'Isla Pucú'],
                    ['name' => 'Juan de Mena'],
                    ['name' => 'Loma Grande'],
                    ['name' => 'Nueva Colombia'],
                    ['name' => 'Piribebuy'],
                    ['name' => 'San Bernardino'],
                    ['name' => 'Santa Elena'],
                    ['name' => 'Tobatí'],
                    ['name' => 'Valenzuela'],
                ],
            ],
            // Departamento de Guairá
            [
                'department' => 'Guairá',
                'cities' => [
                    ['name' => 'Villarrica'],
                    ['name' => 'Borja'],
                    ['name' => 'Coronel Martínez'],
                    ['name' => 'Dr. Bottrell'],
                    ['name' => 'Félix Pérez Cardozo'],
                    ['name' => 'Gral. Eugenio A. Garay'],
                    ['name' => 'Independencia'],
                    ['name' => 'Iturbe'],
                    ['name' => 'José Fassardi'],
                    ['name' => 'Mbocayaty'],
                    ['name' => 'Natalicio Talavera'],
                    ['name' => 'Ñumí'],
                    ['name' => 'Paso Yobái'],
                    ['name' => 'San Salvador'],
                    ['name' => 'Yataity'],
                ],
            ],
            // Departamento de Caaguazú
            [
                'department' => 'Caaguazú',
                'cities' => [
                    ['name' => 'Coronel Oviedo'],
                    ['name' => 'Caaguazú'],
                    ['name' => 'Doctor Cecilio Báez'],
                    ['name' => 'J. Eulogio Estigarribia'],
                    ['name' => 'José Domingo Ocampos'],
                    ['name' => 'La Pastora'],
                    ['name' => 'Mcal. Francisco Solano López'],
                    ['name' => 'Nueva Londres'],
                    ['name' => 'Nueva Toledo'],
                    ['name' => 'Repatriación'],
                    ['name' => 'R.I. 3 Corrales'],
                    ['name' => 'San Joaquín'],
                    ['name' => 'San José de los Arroyos'],
                    ['name' => 'Santa Rosa del Mbutuy'],
                    ['name' => 'Simón Bolívar'],
                    ['name' => 'Tembiaporá'],
                    ['name' => 'Tres de Febrero'],
                    ['name' => 'Yhú'],
                ],
            ],
            // Departamento de Caazapá
            [
                'department' => 'Caazapá',
                'cities' => [
                    ['name' => 'Caazapá'],
                    ['name' => 'Abaí'],
                    ['name' => 'Buena Vista'],
                    ['name' => 'General Higinio Morínigo'],
                    ['name' => 'Maciel'],
                    ['name' => 'Moises Bertoni'],
                    ['name' => 'San Juan Nepomuceno'],
                    ['name' => 'Tavai'],
                    ['name' => 'Yegros'],
                    ['name' => 'Yuty'],
                ],
            ],
            // Departamento de Itapúa
            [
                'department' => 'Itapúa',
                'cities' => [
                    ['name' => 'Encarnación'],
                    ['name' => 'Alto Verá'],
                    ['name' => 'Bella Vista'],
                    ['name' => 'Cambyretá'],
                    ['name' => 'Capitán Meza'],
                    ['name' => 'Capitán Miranda'],
                    ['name' => 'Carlos Antonio López'],
                    ['name' => 'Coronel Bogado'],
                    ['name' => 'Edelira'],
                    ['name' => 'Fram'],
                    ['name' => 'General Artigas'],
                    ['name' => 'General Delgado'],
                    ['name' => 'Hohenau'],
                    ['name' => 'Jesús'],
                    ['name' => 'La Paz'],
                    ['name' => 'Mayor Julio D. Otaño'],
                    ['name' => 'Natalio'],
                    ['name' => 'Nueva Alborada'],
                    ['name' => 'Obligado'],
                    ['name' => 'Pirapó'],
                    ['name' => 'San Cosme y Damián'],
                    ['name' => 'San Juan del Paraná'],
                    ['name' => 'San Pedro del Paraná'],
                    ['name' => 'Tomás Romero Pereira'],
                    ['name' => 'Trinidad'],
                    ['name' => 'Yatytay'],
                ],
            ],
            // Departamento de Misiones
            [
                'department' => 'Misiones',
                'cities' => [
                    ['name' => 'San Juan Bautista'],
                    ['name' => 'Ayolas'],
                    ['name' => 'San Ignacio'],
                    ['name' => 'Santa Rosa'],
                    ['name' => 'Santiago'],
                    ['name' => 'San Patricio'],
                    ['name' => 'Santa María'],
                    ['name' => 'Villa Florida'],
                    ['name' => 'Yabebyry'],
                ],
            ],
            // Departamento de Paraguarí
            [
                'department' => 'Paraguarí',
                'cities' => [
                    ['name' => 'Paraguarí'],
                    ['name' => 'Acahay'],
                    ['name' => 'Caapucú'],
                    ['name' => 'Carapeguá'],
                    ['name' => 'Escobar'],
                    ['name' => 'Gral. Bernardino Caballero'],
                    ['name' => 'La Colmena'],
                    ['name' => 'Mbuyapey'],
                    ['name' => 'Pirayú'],
                    ['name' => 'Quiindy'],
                    ['name' => 'Quyquyhó'],
                    ['name' => 'San Roque González de Santa Cruz'],
                    ['name' => 'Sapucai'],
                    ['name' => 'Tebicuary-mí'],
                    ['name' => 'Yaguarón'],
                    ['name' => 'Ybycuí'],
                    ['name' => 'Ybytymí'],
                ],
            ],
            // Departamento de Alto Paraná
            [
                'department' => 'Alto Paraná',
                'cities' => [
                    ['name' => 'Ciudad del Este'],
                    ['name' => 'Doctor Juan León Mallorquín'],
                    ['name' => 'Hernandarias'],
                    ['name' => 'Iruña'],
                    ['name' => 'Itakyry'],
                    ['name' => 'Juan E. O\'Leary'],
                    ['name' => 'Los Cedrales'],
                    ['name' => 'Mbaracayú'],
                    ['name' => 'Minga Guazú'],
                    ['name' => 'Minga Porá'],
                    ['name' => 'Naranjal'],
                    ['name' => 'Ñacunday'],
                    ['name' => 'Presidente Franco'],
                    ['name' => 'San Alberto'],
                    ['name' => 'San Cristóbal'],
                    ['name' => 'Santa Fe del Paraná'],
                    ['name' => 'Santa Rita'],
                    ['name' => 'Santa Rosa del Monday'],
                    ['name' => 'Tavapy'],
                    ['name' => 'Yguazú'],
                ],
            ],
            // Departamento de Central
            [
                'department' => 'Central',
                'cities' => [
                    ['name' => 'Areguá'],
                    ['name' => 'Capiatá'],
                    ['name' => 'Fernando de la Mora'],
                    ['name' => 'Guarambaré'],
                    ['name' => 'Itá'],
                    ['name' => 'Itauguá'],
                    ['name' => 'Lambaré'],
                    ['name' => 'Limpio'],
                    ['name' => 'Luque'],
                    ['name' => 'Mariano Roque Alonso'],
                    ['name' => 'Nueva Italia'],
                    ['name' => 'Ñemby'],
                    ['name' => 'San Antonio'],
                    ['name' => 'San Lorenzo'],
                    ['name' => 'Villa Elisa'],
                    ['name' => 'Villeta'],
                    ['name' => 'Ypacaraí'],
                    ['name' => 'Ypané'],
                    ['name' => 'José Domingo Ocampos'],
                ],
            ],
            // Departamento de Ñeembucú
            [
                'department' => 'Ñeembucú',
                'cities' => [
                    ['name' => 'Pilar'],
                    ['name' => 'Alberdi'],
                    ['name' => 'Cerrito'],
                    ['name' => 'Desmochados'],
                    ['name' => 'Gral. José Eduvigis Díaz'],
                    ['name' => 'Guazú Cuá'],
                    ['name' => 'Humaitá'],
                    ['name' => 'Isla Umbú'],
                    ['name' => 'Laureles'],
                    ['name' => 'Paso de Patria'],
                    ['name' => 'San Juan Bautista de Ñeembucú'],
                    ['name' => 'Tacuaras'],
                    ['name' => 'Villa Franca'],
                    ['name' => 'Villa Oliva'],
                    ['name' => 'Villalbín'],
                ],
            ],
            // Departamento de Amambay
            [
                'department' => 'Amambay',
                'cities' => [
                    ['name' => 'Pedro Juan Caballero'],
                    ['name' => 'Bella Vista'],
                    ['name' => 'Capitán Bado'],
                    ['name' => 'Karapaí'],
                    ['name' => 'Zanja Pytá'],
                ],
            ],
            // Departamento de Canindeyú
            [
                'department' => 'Canindeyú',
                'cities' => [
                    ['name' => 'Salto del Guairá'],
                    ['name' => 'Colonia Ygatimí'],
                    ['name' => 'Curuguaty'],
                    ['name' => 'Guajaybi'],
                    ['name' => 'La Paloma'],
                    ['name' => 'Nueva Esperanza'],
                    ['name' => 'Villa Ygatimí'],
                    ['name' => 'Yasy Cañy'],
                    ['name' => 'Ybyrarobaná'],
                    ['name' => 'Katueté'],
                    ['name' => 'Corpus Christi'],
                    ['name' => 'Francisco Caballero Álvarez'],
                    ['name' => 'Itanará'],
                    ['name' => 'Yby Pytá'],
                ],
            ],
            // Departamento de Presidente Hayes
            [
                'department' => 'Presidente Hayes',
                'cities' => [
                    ['name' => 'Villa Hayes'],
                    ['name' => 'Benjamín Aceval'],
                    ['name' => 'José Falcón'],
                    ['name' => 'Nanawa'],
                    ['name' => 'Puerto Pinasco'],
                    ['name' => 'Tte. Irala Fernández'],
                    ['name' => 'Fortín Nanawa'],
                    ['name' => 'Fortín Caballero'],
                ],
            ],
            // Departamento de Alto Paraguay
            [
                'department' => 'Alto Paraguay',
                'cities' => [
                    ['name' => 'Fuerte Olimpo'],
                    ['name' => 'Bahía Negra'],
                    ['name' => 'Carmelo Peralta'],
                    ['name' => 'Puerto Casado'],
                ],
            ],
            // Departamento de Boquerón
            [
                'department' => 'Boquerón',
                'cities' => [
                    ['name' => 'Filadelfia'],
                    ['name' => 'Mariscal Estigarribia'],
                    ['name' => 'Loma Plata'],
                    ['name' => 'Teniente Primero Manuel Irala Fernández'],
                    ['name' => 'Neuland'],
                ],
            ],
            // Distrito Capital
            [
                'department' => 'Asunción',
                'cities' => [
                    ['name' => 'Asunción'],
                ],
            ],
        ];

        foreach ($cities as $data) {
            $department = Department::where('name', $data['department'])->first();

            if ($department) {
                foreach ($data['cities'] as $cityData) {
                    City::firstOrCreate([
                        'name' => $cityData['name'],
                        'department_id' => $department->id,
                    ]);
                }
            } else {
                $this->command->error("Departamento no encontrado: " . $data['department']);
            }
        }
    }
}
