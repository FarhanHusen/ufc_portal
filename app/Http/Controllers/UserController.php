<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('layouts.admin.admin'); // Ganti dengan tampilan pengguna biasa
    }
}
