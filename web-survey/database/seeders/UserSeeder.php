<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Cek apakah user admin sudah ada, jika belum baru buat
        if (!User::where('username', 'admin')->exists()) {
            User::create([
                'fullname' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
            ]);
        }

        // Generate user lain menggunakan factory
        User::factory(10)->create();
    }
}
