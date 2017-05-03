<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeAbout', function(Blueprint $table){
          $table->increments('id');
          $table->string('naslov1', 128);
          $table->string('naslov2', 128);
          $table->string('naslov3', 128);
          $table->string('naslov4', 128);
          $table->string('naslov1_body', 2048);
          $table->string('naslov2_body', 2048);
          $table->string('naslov3_body', 2048);
          $table->string('naslov4_body', 2048);
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
        Schema::drop('homeAbout');
    }
}
