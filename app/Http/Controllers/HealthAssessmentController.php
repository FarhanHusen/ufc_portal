<?php

namespace App\Http\Controllers;

use App\Models\HealthAssessment;
use Illuminate\Http\Request;

class HealthAssessmentController extends Controller
{
    public function index()
    {
        $assessments = HealthAssessment::all();
        return view('layouts.health.index', compact('assessments'));
    }

    public function create()
    {
        return view('layouts.health.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'player_name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'position' => 'required|string',
            'height' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1',
        ]);

        $assessment = new HealthAssessment($data);
        $assessment->calculateBMI();
        $assessment->health_status = $this->determineHealthStatus($assessment->bmi);
        $assessment->save();

        return redirect()->route('layouts.health.index')->with('success', 'Penilaian kesehatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
    // Cari data berdasarkan ID
        $assessment = HealthAssessment::findOrFail($id);

    // Kirim data ke view edit
        return view('layouts.health.edit', compact('assessment'));
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'player_name' => 'required|string|max:255',
        'age' => 'required|integer|min:1',
        'position' => 'required|string|max:255',
        'height' => 'required|numeric|min:1',
        'weight' => 'required|numeric|min:1',
    ]);

    // Cari data berdasarkan ID
    $assessment = HealthAssessment::findOrFail($id);

    // Hitung BMI
    $bmi = $request->weight / (($request->height / 100) ** 2);
    $healthStatus = $bmi < 18.5 ? 'Underweight' : ($bmi < 24.9 ? 'Normal' : 'Overweight');

    // Update data
    $assessment->update([
        'player_name' => $request->player_name,
        'age' => $request->age,
        'position' => $request->position,
        'height' => $request->height,
        'weight' => $request->weight,
        'bmi' => $bmi,
        'health_status' => $healthStatus,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('layouts.health.index')->with('success', 'Data berhasil diperbarui.');
}

    private function determineHealthStatus($bmi)
    {
        if ($bmi < 18.5) {
            return 'Underweight';
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            return 'Normal';
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            return 'Overweight';
        } else {
            return 'Obese';
        }
    }

    public function healthy()
    {
        $assessments = HealthAssessment::all();
        return view('layouts.health.healthy', compact('assessments'));
        }
}
