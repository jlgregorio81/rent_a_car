<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Rental;
use App\Models\Telephone;
use Database\Factories\CityFactory;
use Database\Factories\TelephoneFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CitySeeder::class);
        
        City::factory(12)->create();
        $this->call(VehicleSeeder::class);
        
        //$this->call(TelephoneSeeder::class);
        
        Telephone::factory(50)->create();
        Rental::factory(100)->create();

    }
}
