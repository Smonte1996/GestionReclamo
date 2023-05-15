<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Country::class;

    public function definition()
    {
        $name = $this->faker->unique()->country();
        return [
            'name' => $name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
