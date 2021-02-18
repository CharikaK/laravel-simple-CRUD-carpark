<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model' => $this->faker->randomElement(['Benz','Volvo','Porche']),
            'number_plate' => $this->faker->numberBetween(1, 1000),
            'colour' => $this->faker->randomElement(['Green','White','Yellow']),
        ];
    }
}
