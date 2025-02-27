<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 🔹 Hapus data lama agar tidak duplikat
        Role::truncate();
        Permission::truncate();

        // 🔹 Definisikan permission yang akan digunakan
        $permissions = [
            'manage users',
            'create surveys',
            'validate responses',
            'view reports',
        ];

        // 🔹 Buat permission baru
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // 🔹 Buat role dan assign permission
        $admin = Role::create(['name' => 'admin']);
        $surveyor = Role::create(['name' => 'surveyor']);
        $validator = Role::create(['name' => 'validator']);

        // 🔹 Assign permission ke role
        $admin->givePermissionTo($permissions);
        $surveyor->givePermissionTo(['create surveys']);
        $validator->givePermissionTo(['validate responses']);
    }
}