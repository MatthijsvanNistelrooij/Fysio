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


$table->increments('id');


/// IMAGE
$table->string('featured');

//DATUM
$table->string('datum', 35);

//EIGENAAR
$table->string('name', 35);
$table->string('name_owner', 35);
$table->string('address', 35);
$table->string('phone_number', 35);
$table->string('email', 35);

//INFO PAARD
$table->string('name_horse', 35);
$table->string('age', 35);
$table->string('breed', 35);
$table->string('gender', 35);
$table->string('alternatief_adres', 35);

// SITUATIE
$table->string('situatie', 1000);

// STOORNISSEN
$table->string('klacht', 1000);

// BEHANDELING
$table->string('behandeling', 1000);

// VERANDERINGEN
$table->string('verandering', 1000);

// ALGEMENE INDRUK
$table->string('algemeen', 1000);

// INSPECTIE IN STAND
$table->string('inspectie_stand', 1000);

// ORIENTERENDE PALPATIE
$table->string('orienterende_palpatie', 1000);

// BEWEGINGSONDERZOEK
$table->string('bewegingsonderzoek', 1000);

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
        Schema::table('horses', function (Blueprint $table) {
            Schema::dropIfExists('horses');
        });
    }
}
