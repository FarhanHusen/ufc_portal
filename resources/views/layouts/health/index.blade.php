@extends('layouts.app')

@section('content')
{{-- tampilan health assessment --}}
<div class="container">
    <h1>Penilaian Kesehatan Pemain</h1>
    <a href="{{ route('health.create') }}" class="btn btn-primary mb-3">Tambah Penilaian</a>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>Umur</th>
                <th>Posisi</th>
                <th>Tinggi (cm)</th>
                <th>Berat (kg)</th>
                <th>BMI</th>
                <th>Status Kesehatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assessments as $assessment)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $assessment->player_name }}</td>
                <td>{{ $assessment->age }}</td>
                <td>{{ $assessment->position }}</td>
                <td>{{ $assessment->height }}</td>
                <td>{{ $assessment->weight }}</td>
                <td>{{ $assessment->bmi }}</td>
                <td>{{ $assessment->health_status }}</td>
                <td>
                    <a href="{{ route('layouts.health.edit', $assessment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
