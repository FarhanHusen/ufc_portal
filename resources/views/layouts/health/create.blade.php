@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penilaian Kesehatan Pemain</h1>
    <form action="{{ route('health.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="player_name" class="form-label">Nama Pemain</label>
            <input type="text" class="form-control" id="player_name" name="player_name" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Umur</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Tinggi Badan (cm)</label>
            <input type="number" class="form-control" id="height" name="height" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Berat Badan (kg)</label>
            <input type="number" class="form-control" id="weight" name="weight" required>
        </div>
        <div class="mb-3">
            <label for="health_status" class="form-label">Status Kesehatan</label>
            <select class="form-select" id="health_status" name="health_status" required>
                <option value="Sangat Baik">Sangat Baik</option>
                <option value="Baik">Baik</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
                <option value="Buruk">Buruk</option>
                </select>
                </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
