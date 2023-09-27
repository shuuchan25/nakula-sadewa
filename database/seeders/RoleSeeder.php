<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Superadmin',
        ]);
        Role::create([
            'name' => 'Admin Atraksi',
        ]);
        Role::create([
            'name' => 'Admin Akomodasi',
        ]);
        Role::create([
            'name' => 'Admin Kuliner',
        ]);
        Role::create([
            'name' => 'Admin Biro Perjalanan',
        ]);
    }
}
