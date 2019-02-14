<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('libelle', 50);
          $table->string('pays', 30);
          $table->string('ville', 60);
          $table->dateTime('date_debut');
          $table->dateTime('date_fin');
          $table->text('description');
          $table->text('photo');
          $table->float('cout', 8, 2);
          $table->boolean('disponibilite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyages');
    }
}
