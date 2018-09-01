<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNamaPemilikRekeningToGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gaji', function (Blueprint $table) {
            $table->string('nama_pemilik_rekening')->nullable()->after('rekening');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gaji', function (Blueprint $table) {
            $table->dropColumn('nama_pemilik_rekening');
        });
    }
}
