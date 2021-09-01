<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('datum');
            $table->text('name_horse');
            $table->text('horse_id');
            $table->text('inspectie_stand');
            $table->text('behandeling');
            $table->text('orienterende_palpatie');

            $table->text('lp1');
            $table->text('lp2');

            $table->text('bo1');
            $table->text('bo2');
            $table->text('bo3');
            $table->text('bo4');
            $table->text('bo5');
            $table->text('bo6');
            $table->text('bo7');
            $table->text('bo8');
            $table->text('bo9');
            $table->text('bo10');
            $table->text('bo11');
            $table->text('bo12');
            $table->text('bo13');
            $table->text('bo14');
            $table->text('bo15');
            $table->text('bo16');
            $table->text('bo17');
            $table->text('bo18');
            $table->text('bo19');
            $table->text('bo20');
            $table->text('bo21');
            $table->text('bo22');
            $table->text('bo23');
            $table->text('bo24');
            $table->text('bo25');
            $table->text('bo26');
            $table->text('bo27');
            $table->text('bo28');
            $table->text('bo29');
            $table->text('bo30');
            $table->text('bo31');
            $table->text('bo32');
            $table->text('bo33');
            $table->text('bo34');
            $table->text('bo35');
            $table->text('bo36');
            $table->text('bo37');
            $table->text('bo38');
            $table->text('bo39');
            $table->text('bo40');
            $table->text('bo41');
            $table->text('bo42');
            $table->text('bo43');
            $table->text('bo44');
            $table->text('bo45');
            $table->text('bo46');
            $table->text('bo47');
            $table->text('bo48');
            $table->text('bo49');
            $table->text('bo50');
            $table->text('bo51');
            $table->text('bo52');
            $table->text('bo53');
            $table->text('bo54');
            $table->text('bo55');
            $table->text('bo56');
            $table->text('bo57');
            $table->text('bo58');
            $table->text('bo59');
            $table->text('bo60');
            $table->text('bo61');
            $table->text('bo62');
            $table->text('bo63');
            $table->text('bo64');
            $table->text('bo65');
            $table->text('bo66');
            $table->text('bo67');


            $table->text('bbr1');
            $table->text('bbr2');
            $table->text('bbr3');
            $table->text('bbr4');
            $table->text('bbr5');
            $table->text('bbr6');
            $table->text('bbr7');
            $table->text('bbr8');
            $table->text('bbr9');
            $table->text('bbr10');
            $table->text('bbr11');
            $table->text('bbr12');
            $table->text('bbr13');
            $table->text('bbr14');
            $table->text('bbr15');
            $table->text('bbr16');
            $table->text('bbr17');
            $table->text('bbr18');
            $table->text('bbr19');
            $table->text('bbr20');
            $table->text('bbr21');
            $table->text('bbr22');
            $table->text('bbr23');
            $table->text('bbr24');
            $table->text('bbr25');
            $table->text('bbr26');
            $table->text('bbr27');
            $table->text('bbr28');
            $table->text('bbr29');
            $table->text('bbr30');
            $table->text('bbr31');
            $table->text('bbr32');
            $table->text('bbr33');
            $table->text('bbr34');
            $table->text('bbr35');
            $table->text('bbr36');

            $table->text('ib1');
            $table->text('ib2');
            $table->text('ib3');
            $table->text('ib4');
            $table->text('ib5');
            $table->text('ib6');
            $table->text('ib7');
            $table->text('ib8');
            $table->text('ib9');
            $table->text('ib10');
            $table->text('ib11');
            $table->text('ib12');
            $table->text('ib13');
            $table->text('ib14');
            $table->text('ib15');
            $table->text('ib16');
            $table->text('ib17');
            $table->text('ib18');
            $table->text('ib19');


            $table->text('bbl1');
            $table->text('bbl2');
            $table->text('bbl3');
            $table->text('bbl4');
            $table->text('bbl5');
            $table->text('bbl6');
            $table->text('bbl7');
            $table->text('bbl8');
            $table->text('bbl9');
            $table->text('bbl10');
            $table->text('bbl11');
            $table->text('bbl12');
            $table->text('bbl13');
            $table->text('bbl14');
            $table->text('bbl15');
            $table->text('bbl16');
            $table->text('bbl17');
            $table->text('bbl18');
            $table->text('bbl19');
            $table->text('bbl20');
            $table->text('bbl21');
            $table->text('bbl22');
            $table->text('bbl23');
            $table->text('bbl24');
            $table->text('bbl25');
            $table->text('bbl26');
            $table->text('bbl27');
            $table->text('bbl28');
            $table->text('bbl29');
            $table->text('bbl30');
            $table->text('bbl31');
            $table->text('bbl32');
            $table->text('bbl33');
            $table->text('bbl34');
            $table->text('bbl35');
            $table->text('bbl36');

            $table->text('iis1');
            $table->text('iis2');
            $table->text('iis3');
            $table->text('iis4');

            $table->text('op1');
            $table->text('op2');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessies');
    }
}
