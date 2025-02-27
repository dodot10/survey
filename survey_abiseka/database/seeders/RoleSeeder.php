<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// Pastikan role sudah ada sebelum membuat user
$adminRole = Role::firstOrCreate(['name' => 'admin']);
$userRole = Role::firstOrCreate(['name' => 'user']);

// Buat User Admin
$admin = User::firstOrCreate([
    'email' => 'admin@example.com',
], [
    'name' => 'Admin',
    'password' => bcrypt('password'),
]);

// Assign role admin
if (!$admin->hasRole('admin')) {
    $admin->assignRole($adminRole);
}

// Buat User Biasa
$user = User::firstOrCreate([
    'email' => 'user@example.com',
], [
    'name' => 'User',
    'password' => bcrypt('password'),
]);

// Assign role user
if (!$user->hasRole('user')) {
    $user->assignRole($userRole);
}    }
}
