<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function pemain()
    {
        return view('abouts_us.pemain'); // Mengarahkan ke tampilan admin
    }
}
