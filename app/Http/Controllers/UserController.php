<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('layouts.user.user'); // Ganti dengan tampilan pengguna biasa
    }
}
