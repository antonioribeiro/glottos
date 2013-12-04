<?php

use Illuminate\Database\Migrations\Migration;

class CountriesLanguages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glottos_countries_languages', function($table)
        {
            $table->increments('id',3);

            $table->string('language_id',3);
            $table->string('country_id',3);
            $table->string('regional_name',64);    
            $table->boolean('enabled')->default(false);
            
            $table->unique('regional_name');

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
        Schema::dropIfExists('glottos_countries_languages');
    }

}