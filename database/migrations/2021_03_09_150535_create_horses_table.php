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
//DATUM
$table->string('datum', 35);

//ALGEMEEN
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
$table->string('featured');

// SITUATIE
$table->string('bezit_eigenaar', 35);
$table->string('huisvesting', 35);
$table->string('voorgeschiedenis', 35);
$table->string('voeding', 35);
$table->string('medicijnen', 35);
$table->string('overig', 35);
$table->string('aankoopkeuring', 35);

// KLACHTEN
$table->string('stoornissen', 35);
$table->string('klacht', 35);
$table->string('behandeling', 35);
$table->string('veranderingen', 35);
$table->string('mesten', 35);


// ALGEMENE INDRUK
$table->string('BAR', 35);
$table->string('voedingstoestand', 35);
$table->string('vacht', 35);
$table->string('voeten', 35);

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
