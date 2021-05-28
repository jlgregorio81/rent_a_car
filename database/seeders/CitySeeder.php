<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cities')->insert([
        //     'name' => 'São Paulo',
        //     'state' => 'SP',
        // ]);

        // DB::table('cities')->insert([
        //     'name' => 'Rio de Janeiro',
        //     'state' => 'RJ',
        // ]);

        // DB::table('cities')->insert([
        //     'name' => 'Curitiba',
        //     'state' => 'PR',
        // ]);

        City::factory(10)->create();

    }
}
