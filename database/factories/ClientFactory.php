<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition()
    {
        $name = $this->faker->unique()->company();
        return [
            'social_reason' => $name,
            'ruc' => $this->faker->unique()->numerify('09########001'),
            'updated_at' => now(),
            'created_at' => now()
        ];
    }
}
