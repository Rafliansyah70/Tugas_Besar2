<?php

namespace Database\Seeders;

use App\Models\Factory;
use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Factory::create([
            'name' => 'Pabrik Jawa Tengah',
            'location' => 'Jawa Tengah',
        ]);

        Factory::create([
            'name' => 'Pabrik Jawa Barat',
            'location' => 'Jawa Barat',
        ]);

        // Anda bisa menambahkan lebih banyak pabrik sesuai kebutuhan
    }
}
