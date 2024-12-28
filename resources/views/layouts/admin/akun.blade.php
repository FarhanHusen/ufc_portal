@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Akun Pemain</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Form Import CSV --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Import Data dari CSV</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.akun.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="csv_file">Pilih File CSV</label>
                        <input type="file" class="form-control-file" id="csv_file" name="csv_file" accept=".csv" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Import Data</button>
                    </div>
                </form>
                <small class="text-muted">Format CSV: nama,email,password,role</small>
            </div>
        </div>

        {{-- Form untuk Membuat Akun Pemain Baru --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Buat Akun Pemain Baru</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.akun.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Pemain</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Buat Akun</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Daftar Akun Pemain --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Akun Pemain</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    {{-- Tombol Edit --}}
                                    <button class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#editModal{{ $user->id }}">
                                        Edit
                                    </button>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('admin.akun.destroy', $user->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Modal Edit --}}
                            <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Edit Akun Pemain
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.akun.update', $user->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="name">Nama Pemain</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ $user->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        value="{{ $user->email }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="role">Role</label>
                                                    <select class="form-control" id="role" name="role" required>
                                                        <option value="admin"
                                                            {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                        <option value="user"
                                                            {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Simpan
                                                        Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
