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
        Person::factory()->count(100)->has(Vehicle::factory())->create();
    }
}
