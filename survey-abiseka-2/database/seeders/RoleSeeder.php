<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat role
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $surveyor = Role::firstOrCreate(['name' => 'surveyor']);
        $validator = Role::firstOrCreate(['name' => 'validator']);

        // Buat permission
        $permissions = [
            'manage surveys',
            'validate surveys',
            'create surveys'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permission ke role
        $admin->givePermissionTo(['manage surveys', 'validate surveys', 'create surveys']);
        $surveyor->givePermissionTo(['create surveys']);
        $validator->givePermissionTo(['validate surveys']);
    }
}
