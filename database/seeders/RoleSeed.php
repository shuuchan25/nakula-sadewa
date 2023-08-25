<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Super Admin',
        ]);
        Role::create([
            'name' => 'Admin Hotel',
        ]);
        Role::create([
            'name' => 'Admin Lokasi Wisata',
        ]);
        Role::create([
            'name' => 'Admin Tujuan Wisata',
        ]);
        Role::create([
            'name' => 'Admin Restoran',
        ]);
        Role::create([
            'name' => 'Admin Transportasi',
        ]);
    }
}
