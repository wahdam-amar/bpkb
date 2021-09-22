<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::factory()
            ->has(Vehicle::factory()->count(1), 'vehicles')
            ->count(10000)->create();
    }
}
