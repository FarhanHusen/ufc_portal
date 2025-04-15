@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penilaian Kesehatan Pemain</h1>

    <form action="{{ route('layouts.health.update', $assessment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="player_name" class="form-label">Nama Pemain</label>
            <input type="text" name="player_name" id="player_name" class="form-control" value="{{ $assessment->player_name }}" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Umur</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $assessment->age }}" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Posisi</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ $assessment->position }}" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Tinggi (cm)</label>
            <input type="number" name="height" id="height" class="form-control" value="{{ $assessment->height }}" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Berat (kg)</label>
            <input type="number" name="weight" id="weight" class="form-control" value="{{ $assessment->weight }}" required>
        </div>
        <div class="mb-3">
            <label for="health_status" class="form-label">Status Kesehatan</label>
            <select name="health_status" id="health_status" class="form-control" required>
                <option value="Sangat Baik" {{ $assessment->health_status == 'Sangat Baik' ? 'selected' : '' }}>Sangat Baik</option>
                <option value="Baik" {{ $assessment->health_status == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Cukup" {{ $assessment->health_status == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                <option value="Kurang" {{ $assessment->health_status == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                <option value="Buruk" {{ $assessment->health_status == 'Buruk' ? 'selected' : '' }}>Buruk</option>
                </select>
            </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('layouts.health.index') }}" class="btn btn-secondary">Kembali</a>

    </form>
</div>
@endsection
