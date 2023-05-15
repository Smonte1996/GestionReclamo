<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warehouse>
 */
class WarehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Warehouse::class;

    public function definition()
    {
        $name = $this->faker->unique()->streetName();
        return [
            'name' => $name,
            'city_id' => City::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
