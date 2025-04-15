<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Pengguna Admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('adminpassword'), // Pastikan ini adalah password yang aman
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Pengguna Biasa
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('userpassword'),
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call(HealthAssessmentSeeder::class);
    }
}
