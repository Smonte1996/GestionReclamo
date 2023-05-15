<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = City::class;

    public function definition()
    {
        $name = $this->faker->unique()->city();
        return [
            'name' => $name,
            'country_id' => Country::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
