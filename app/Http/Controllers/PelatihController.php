<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;

class PelatihController extends Controller
{
    // Menampilkan halaman manajemen pelatih (form input dan daftar pelatih)
    public function index()
    {
        $this->authorize('isadmin');
        $pelatih = Pelatih::all(); // Ambil semua data pelatih
        return view('layouts.admin.mpelatih', compact('pelatih'));
    }

    // Menyimpan data pelatih
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Proses upload foto
        $photoPath = $request->file('photo')->store('pelatih_photos', 'public');

        // Simpan data pelatih ke database
        Pelatih::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'photo' => $photoPath, // Simpan path foto
        ]);

        return redirect()->route('pelatih.index')->with('success', 'Pelatih berhasil ditambahkan');
    }
    // Menampilkan halaman pelatih di landing page
    public function showPelatih()
    {
        // Ambil semua data pelatih untuk halaman landing
        $pelatih = Pelatih::all();
        return view('abouts_us.pelatih', compact('pelatih')); // Menampilkan halaman pelatih di landing page
    }
}
