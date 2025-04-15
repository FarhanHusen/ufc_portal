<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class IndividualController extends Controller
{
    public function editable()
    {
        return view('user.editable');
    }

    public function individual()
    {
        return view('user.individual');
    }
}
