<?php

use Illuminate\Database\Migrations\Migration;

class Currencies extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glottos_currencies', function($table)
        {
            $table->string('id',3);
            $table->string('code');

            $table->string('name');
            $table->string('symbol');
            $table->string('fractional_unit')->nullable();
            $table->string('number_to_basic')->nullable();

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
        Schema::dropIfExists('glottos_currencies');
    }

}
