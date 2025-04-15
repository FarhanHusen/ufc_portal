<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthAssessment;

class HealthAssessmentSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data dummy
        HealthAssessment::create([
            'player_name' => 'Cristiano Ronaldo',
            'age' => 38,
            'position' => 'Forward',
            'height' => 187,
            'weight' => 83,
            'bmi' => 23.7,
            'health_status' => 'Fit',
        ]);

        HealthAssessment::create([
            'player_name' => 'Lionel Messi',
            'age' => 36,
            'position' => 'Midfielder',
            'height' => 170,
            'weight' => 72,
            'bmi' => 24.9,
            'health_status' => 'Fit',
        ]);

        HealthAssessment::create([
            'player_name' => 'Kylian Mbappé',
            'age' => 25,
            'position' => 'Forward',
            'height' => 178,
            'weight' => 75,
            'bmi' => 23.7,
            'health_status' => 'Fit',
        ]);
    }
}
