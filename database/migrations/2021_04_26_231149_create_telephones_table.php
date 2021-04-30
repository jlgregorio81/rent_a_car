<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelephonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephones', function (Blueprint $table) {
            //..creates a column with unsigned value
            $table->unsignedBigInteger('id');
            //..defines a primary key
            $table->primary('id');
            //..defines a column as foreign key
            $table->foreign('id')->references('id')->on('clients');
            $table->string('number', 15);
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
        Schema::dropIfExists('telephones');
    }
}
