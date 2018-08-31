<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKalimatBijak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalimat_bijak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bulan',2);
            $table->year('tahun');
            $table->text('kalimat_bijak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kalimat_bijak');
    }
}
