<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'name' => 'DMC Delorean',
            'register' => '2255'
        ]);

        DB::table('vehicles')->insert([
            'name' => 'Relâmpago Marquinhos',
            'register' => '112233'
        ]);

        DB::table('vehicles')->insert([
            'name' => 'Fuscão Preto',
            'register' => '225588'
        ]);
    }
}
