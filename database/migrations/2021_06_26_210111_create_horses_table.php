<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
            $table->string('name_owner');
            $table->string('name_horse');
            $table->string('achternaam');
            $table->string('age');
            $table->string('breed');
            $table->string('color');
            $table->string('height');
            $table->string('klacht');
            $table->string('address');
            $table->string('alternatief_adres');
            $table->string('phone_number');
            $table->string('email');
            $table->string('behandeling');
            $table->string('verandering');
            $table->string('opmerkingen');
            $table->string('situatie');
            $table->string('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horses');
    }
}
