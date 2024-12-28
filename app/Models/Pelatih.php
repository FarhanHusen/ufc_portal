<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = 'pelatih'; // Pastikan nama tabelnya sesuai dengan yang ada di database

    protected $fillable = [
        'name',
        'position',
        'description',
        'photo',
    ];
}
