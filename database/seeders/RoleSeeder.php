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
            'name' => 'Admin Penginapan',
        ]);
        Role::create([
            'name' => 'Admin Destinasi Wisata',
        ]);
        Role::create([
            'name' => 'Admin Desa Wisata',
        ]);
        Role::create([
            'name' => 'Admin Kuliner',
        ]);
        Role::create([
            'name' => 'Admin Biro Perjalanan',
        ]);
    }
}
