<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;

    protected $table = 'individuals'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}
