<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //     \App\Models\User::factory()->create([
        //         'name' => 'Admin',
        //         'email' => 'testadmin@gmail.com',
        //         'password' => bcrypt('p$ssw#rd'),
        //     ])->assignRole('admin');

        //     // \App\Models\User::factory()->create([
        //     //     'name' => 'User',
        //     //     'email' => 'testuser@gmail.com',
        //     //     'password' => bcrypt('p$ssw#rd'),
        //     // ])->assignRole('user');

        //     \App\Models\User::factory()->create([
        //         'name' => 'User',
        //         'email' => 'testvendor@gmail.com',
        //         'password' => bcrypt('p$ssw#rd'),
        //     ])->assignRole('vendor');

        // Mendapatkan pabrik yang sudah disimpan
        $factory1 = Factory::where('name', 'Pabrik Jawa Tengah')->first();
        $factory2 = Factory::where('name', 'Pabrik Jawa Barat')->first();

        // SuperAdmin (Tidak terkait dengan pabrik)
        User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'),
            'role' => 'superadmin',
            'factory_id' => null,  // SuperAdmin tidak terikat pada pabrik
            'mode' => 'dark',
        ])->assignRole('superadmin');

        // Admin A (Jawa Tengah)
        User::create([
            'name' => 'Admin A',
            'email' => 'adminA@example.com',
            'password' => bcrypt('password'),
            'role' => 'adminA',
            'factory_id' => $factory1->id,  // Admin A mengelola pabrik Jawa Tengah
            'mode' => 'dark',
        ])->assignRole('adminA');

        // Admin B (Jawa Barat)
        User::create([
            'name' => 'Admin B',
            'email' => 'adminB@example.com',
            'password' => bcrypt('password'),
            'role' => 'adminB',
            'factory_id' => $factory2->id,  // Admin B mengelola pabrik Jawa Barat
            'mode' => 'light',
        ])->assignRole('adminB');
    }
}
