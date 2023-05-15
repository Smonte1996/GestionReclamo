<?php

namespace Database\Factories;

use App\Models\Departament;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employee::class;

    public function definition()
    {
        $cedula = $this->faker->unique()->numerify('09########');
        return [
            'name' => $this->faker->firstName(null),
            'lastname' =>  $this->faker->lastName(),
            'identification_card' => $cedula,
            'leader' => $this->faker->randomElement([true,false]),
            // 'employee_id' => 1,
            'warehouse_id' => Warehouse::factory(),
            'departament_id' => Departament::factory(),
            'created_at' => now(),
            'updated_at' => now(),
            'position_id' => Position::factory()
        ];
    }
}
