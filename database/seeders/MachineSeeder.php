<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Machine;
use App\Models\Factory;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan atau membuat pabrik
        $factory1 = Factory::firstOrCreate([
            'name' => 'Pabrik Jawa Tengah',
            'location' => 'Jawa Tengah',
        ]);

        $factory2 = Factory::firstOrCreate([
            'name' => 'Pabrik Jawa Barat',
            'location' => 'Jawa Barat',
        ]);

        // Menambahkan 10 mesin untuk Pabrik Jawa Tengah
        for ($i = 1; $i <= 10; $i++) {
            Machine::create([
                'factory_id' => $factory1->id,
                'name' => 'Mesin Filtrasi ' . $i,  // Menambahkan nama mesin
                'status' => $this->getRandomStatus(),  // Status acak
            ]);
        }

        // Menambahkan 10 mesin untuk Pabrik Jawa Barat
        for ($i = 1; $i <= 10; $i++) {
            Machine::create([
                'factory_id' => $factory2->id,
                'name' => 'Mesin Filtrasi ' . $i,  // Menambahkan nama mesin
                'status' => $this->getRandomStatus(),  // Status acak
            ]);
        }
    }

    /**
     * Mengembalikan status mesin secara acak.
     */
    private function getRandomStatus()
    {
        $statuses = ['working', 'non_working', 'repairing'];
        return $statuses[array_rand($statuses)];
    }
}
