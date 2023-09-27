<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'role_id' => '2',
            'name' => 'Admin Atraksi',
            'username' => 'admin-atraksi',
            'email' => 'admin_atraksi@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'role_id' => '3',
            'name' => 'Admin Akomodasi',
            'username' => 'admin-akomodasi',
            'email' => 'admin_akomodasi@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'role_id' => '4',
            'name' => 'Admin Kuliner',
            'username' => 'admin-kuliner',
            'email' => 'admin_kuliner@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'role_id' => '5',
            'name' => 'Admin Biro',
            'username' => 'admin-biro',
            'email' => 'admin_biro@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}