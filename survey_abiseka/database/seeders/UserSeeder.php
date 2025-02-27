<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan roles tersedia sebelum assign ke user
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Buat atau update User Admin
        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'], // Cek berdasarkan email
            [
                'name' => 'Admin',
                'password' => bcrypt('1234'),
            ]
        );
        $admin->assignRole($adminRole);

        // Buat atau update User Biasa
        $user = User::updateOrCreate(
            ['email' => 'user@example.com'], // Cek berdasarkan email
            [
                'name' => 'User',
                'password' => bcrypt('1234'),
            ]
        );
        $user->assignRole($userRole);
    }
}
