<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('layouts.admin.admin'); // Mengarahkan ke tampilan admin
    }

    // Menampilkan halaman akun pemain
    public function akun()
    {
        $users = User::all();  // Ambil semua data pengguna
        return view('layouts.admin.akun', compact('users'));
    }

    // Menyimpan akun baru
    public function store(Request $request)
    {
        try {
            // Tambahkan log untuk debugging
            Log::info('Data yang diterima:', $request->all());

            // Validasi input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'role' => 'required|in:admin,user',
            ]);

            // Tambahkan log setelah validasi
            Log::info('Data tervalidasi:', $validated);

            // Buat user baru
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role'],
            ]);

            // Tambahkan log setelah pembuatan user
            Log::info('User berhasil dibuat dengan ID: ' . $user->id);

            return redirect()
                ->route('admin.akun')
                ->with('success', 'Akun berhasil dibuat!');
        } catch (\Exception $e) {
            // Log error
            Log::error('Gagal membuat user: ' . $e->getMessage());

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Gagal membuat akun: ' . $e->getMessage()]);
        }
    }
    public function update(Request $request, User $user)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'role' => 'required|in:admin,user',
            ]);

            // Update data user
            $user->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
            ]);

            return redirect()->route('admin.akun')->with('success', 'Akun berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal memperbarui akun: ' . $e->getMessage()]);
        }
    }


    // Menghapus akun pemain
    public function destroy(User $user)
    {
        $user->delete();
        // Mengatur ulang ID auto-increment
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        return redirect()->route('admin.akun')->with('success', 'Akun berhasil dihapus!');
    }

    public function import(Request $request)
{
    $request->validate([
        'csv_file' => 'required|mimes:csv,txt'
    ]);

    try {
        $file = fopen($request->file('csv_file')->getPathname(), 'r');
        $header = fgetcsv($file); // Skip header row if exists

        while (($data = fgetcsv($file)) !== false) {
            User::create([
                'name' => $data[0],
                'email' => $data[1],
                'password' => Hash::make($data[2]),
                'role' => $data[3],
            ]);
        }

        fclose($file);
        return redirect()->back()->with('success', 'Data berhasil diimport!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}
}
