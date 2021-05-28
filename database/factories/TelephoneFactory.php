<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Telephone;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelephoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telephone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Client::factory()->create()->id,
            'number' => $this->faker->phoneNumber()
        ];
    }
}
