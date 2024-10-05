<?php

namespace Database\Seeders;

use App\Models\InterestType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $interestTypes = [
            [
                'name' => 'Aventura',
                'description' => 'Actividades emocionantes y llenas de adrenalina que desafían tus límites.'
            ],
            [
                'name' => 'Cultural',
                'description' => 'Experiencias relacionadas con la cultura, el arte y la historia local.'
            ],
            [
                'name' => 'Gastronómico',
                'description' => 'Exploración de la gastronomía local, incluyendo restaurantes, mercados y talleres culinarios.'
            ],
            [
                'name' => 'Relajación',
                'description' => 'Actividades para descansar y relajarse, como spas, playas y retiros de bienestar.'
            ],
            [
                'name' => 'Historia',
                'description' => 'Visitas a sitios históricos, museos y monumentos emblemáticos.'
            ],
            [
                'name' => 'Naturaleza',
                'description' => 'Exploración de paisajes naturales, parques nacionales y reservas ecológicas.'
            ],
            [
                'name' => 'Deportes',
                'description' => 'Participación en actividades deportivas, como senderismo, ciclismo y deportes acuáticos.'
            ],
            [
                'name' => 'Entretenimiento',
                'description' => 'Eventos y actividades recreativas, incluyendo conciertos, teatros y festivales.'
            ],
            [
                'name' => 'Fotografía',
                'description' => 'Lugares y actividades ideales para los entusiastas de la fotografía.'
            ],
            [
                'name' => 'Ecoturismo',
                'description' => 'Turismo sostenible que respeta el medio ambiente y las comunidades locales.'
            ],
            [
                'name' => 'Alojamiento Único',
                'description' => 'Experiencias de alojamiento inusuales, como cabañas en árboles, casas flotantes y hoteles boutique.'
            ],
            [
                'name' => 'Vida Nocturna',
                'description' => 'Explorar la vida nocturna local, incluyendo bares, discotecas y eventos nocturnos.'
            ],
            [
                'name' => 'Compras',
                'description' => 'Zonas comerciales, mercados artesanales y centros comerciales para los amantes de las compras.'
            ],
            [
                'name' => 'Bienestar',
                'description' => 'Actividades enfocadas en el bienestar físico y mental, como yoga, meditación y terapias holísticas.'
            ],
            [
                'name' => 'Turismo Rural',
                'description' => 'Experiencias en entornos rurales, interactuando con la naturaleza y las comunidades locales.'
            ],
        ];

        foreach ($interestTypes as $type) {
            InterestType::create($type);
        }
    }
}
