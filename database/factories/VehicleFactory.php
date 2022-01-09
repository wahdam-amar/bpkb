<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));

        return [
            'name'      => $this->faker->name,
            'no'        => $this->faker->numberBetween(),
            'brand'     => $faker->vehicleBrand,
            'type'      => $faker->vehicleType,
            'jenis'     => $faker->vehicleModel,
            'made_date' => $this->faker->dateTimeThisCentury(),
            'effective_date' => $this->faker->dateTimeThisYear(),
            'plate'     => $this->faker->randomNumber(),
            'engine'    => $this->faker->randomNumber(),
            'frame'     => $this->faker->randomNumber(),
            'amount'    => $this->faker->randomNumber(),
        ];
    }
}
