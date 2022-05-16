<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trenos', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',50);
            $table->string('stazione_di_partenza',50);
            $table->string('stazione_di_arrivo',50);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table ->date('data');
            $table ->text('station_img');
            $table->string('codice_treno',20);
            $table->string('numero_carrozze',50);
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
        Schema::dropIfExists('trenos');
    }
}
