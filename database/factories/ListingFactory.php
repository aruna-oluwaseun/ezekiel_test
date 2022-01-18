<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use App\Models\listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() : array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'lower_range' => Arr::random([20000, 25000, 30000]),
            'upper_range' => Arr::random([35000, 40000, 45000]),
        ];
    }

  
}
