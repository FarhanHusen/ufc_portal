<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    // Menampilkan halaman manajemen pemain (form input dan daftar pemain)
    public function index()
    {
        $this->authorize('isadmin');
        $pemain = Pemain::all(); // Ambil semua data pemain
        return view('layouts.admin.mpemain', compact('pemain'));
    }

    // Menyimpan data pemain
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
        $photoPath = $request->file('photo')->store('pemain_photos', 'public');

        // Simpan data pemain ke database
        Pemain::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'photo' => $photoPath, // Simpan path foto
        ]);

        return redirect()->route('pemain.index')->with('success', 'Pemain berhasil ditambahkan');
    }
    // Menampilkan halaman pemain di landing page
    public function showPemain()
    {
        // Ambil semua data pemain untuk halaman landing
        $pemain = Pemain::all();
        return view('abouts_us.pemain', compact('pemain')); // Menampilkan halaman pemain di landing page
    }
}
