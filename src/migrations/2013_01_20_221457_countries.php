<?php

use Illuminate\Database\Migrations\Migration;

class Countries extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glottos_countries', function($table)
        {
            $table->string('id',3)->primary();

            $table->string('name',64)->unique();

            $table->float('latitude')->nullable();

            $table->float('longitude')->nullable();

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
        Schema::dropIfExists('glottos_countries');
    }

}
