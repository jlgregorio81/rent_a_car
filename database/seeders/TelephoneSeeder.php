<?php

namespace Database\Seeders;

use App\Models\Telephone;
use Illuminate\Database\Seeder;

class TelephoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Telephone::factory(50)->create();
    }
}
