@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Manajemen Pemain</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Input Pelatih -->
        <form action="{{ route('pelatih.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Pemain</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="position">Posisi</label>
                <input type="text" class="form-control" id="position" name="position" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Foto Pelatih</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>

        <!-- Tabel Daftar Pelatih -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemain</th>
                    <th>Posisis</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelatih as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->position }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            @if ($item->photo)
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="Foto Pelatih" width="100">
                            @else
                                Tidak ada foto
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
