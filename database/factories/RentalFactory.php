<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Rental;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start = strtotime('2021-01-01');
        $end = strtotime('2021-05-27');
        $rent = mt_rand($start, $end);
        $days = rand(1,60);
        $devolution = strtotime("+{$days} day", $rent);
        return [
           'client_id' => Client::all()->random(1)->first()->id,
           'vehicle_id' => Vehicle::all()->random(1)->first()->id,
           'date_rent' => date('Y-m-d', $rent),
           'date_devolution' => date('Y-m-d', $devolution),
           'value' => rand(1000,10000),
        ];
    }
}
