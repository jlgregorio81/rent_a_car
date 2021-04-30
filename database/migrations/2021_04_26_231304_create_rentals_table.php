<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            //..create the primary key
            $table->id();
            //..create the foreign keys referenced on client and vehicle tables
            $table->foreignId('client_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->date('date_rent');
            $table->date('date_devolution');
            $table->decimal('value', 9,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
