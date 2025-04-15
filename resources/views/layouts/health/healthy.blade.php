@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Penilaian Kesehatan Pemain</h1>
    <div class="row">
        @foreach ($assessments as $assessment)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">{{ $assessment->player_name }}</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Umur:</strong> {{ $assessment->age }} tahun
                        </li>
                        <li class="list-group-item">
                            <strong>Posisi:</strong> {{ $assessment->position }}
                        </li>
                        <li class="list-group-item">
                            <strong>Tinggi:</strong> {{ $assessment->height }} cm
                        </li>
                        <li class="list-group-item">
                            <strong>Berat:</strong> {{ $assessment->weight }} kg
                        </li>
                        <li class="list-group-item">
                            <strong>BMI:</strong> {{ $assessment->bmi }}
                        </li>
                        <li class="list-group-item">
                            <strong>Status Kesehatan:</strong>
                            <span class="badge 
                                @if($assessment->health_status == 'Sehat') bg-success
                                @elseif($assessment->health_status == 'Cukup Sehat') bg-warning
                                @else bg-danger
                                @endif">
                                {{ $assessment->health_status }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection