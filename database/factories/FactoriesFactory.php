<?php

namespace Database\Factories;

use App\Models\Factory;
use Illuminate\Database\Eloquent\Factories\Factory as EloquentFactory;

class FactoriesFactory extends EloquentFactory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,  // Menghasilkan nama perusahaan acak
            'location' => $this->faker->city, // Menghasilkan nama kota acak
        ];
    }
}