<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_name',
        'age',
        'position',
        'height',
        'weight',
        'bmi',
        'health_status',
    ];

    // Menghitung BMI secara otomatis
    public function calculateBMI()
    {
        if ($this->height && $this->weight) {
            $heightInMeters = $this->height / 100; // convert to meters
            $this->bmi = round($this->weight / ($heightInMeters ** 2), 2);
        }
    }
}
