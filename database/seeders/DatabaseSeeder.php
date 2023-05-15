<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory(1)->create();
        // \App\Models\Country::factory(20)->create();
        $this->call([
            // CountrySeeder::class,
            // CitySeeder::class,
            // WarehouseSeeder::class,
            // DepartamentSeeder::class,
            // ClientSeeder::class,
            // SupplierSeeder::class,
            // PositionSeeder::class,
            // EmployeeSeeder::class
            // CommSeentSeeder::class,
        ]);

        // \App\Models\User::factory()->create([ph
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
