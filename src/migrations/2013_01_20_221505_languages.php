<?php

use Illuminate\Database\Migrations\Migration;

class Languages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glottos_languages', function($table)
        {
            $table->string('id',3);
            
            $table->string('alphabet',32);
            $table->string('name',64);
            $table->primary(array('id', 'alphabet'));

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
        Schema::dropIfExists('glottos_languages');
    }

}
