<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->increments('id');
            $table->double('gaji')->default(0);
            $table->double('uang_makan')->default(0);
            $table->double('rapel_tkpkn')->default(0);
            $table->double('rapel_uang_makan')->default(0);
            $table->double('uang_lembur')->default(0);
            $table->double('tunjangan_pokok')->default(0);
            $table->double('tunjangan_tambahan')->default(0);
            $table->double('potongan_absensi')->default(0);
            $table->double('nett')->default(0);
            $table->double('rapel_tkpkn_gaji')->default(0);
            $table->double('total')->default(0);
            $table->double('bri')->default(0);
            $table->double('emas_qurban')->default(0);
            $table->double('zakat')->default(0);
            $table->double('infak_dll')->default(0);
            $table->double('aasuh')->default(0);
            $table->double('kas')->default(0);
            $table->double('pot_satu_persen')->default(0);
            $table->double('fee_payroll')->default(0);
            $table->double('jumlah_potongan')->default(0);
            $table->double('jumlah_bersih')->default(0);
            $table->string('rekening');
            $table->string('jabatan');
            $table->string('seksi_kelompok');
            $table->double('parameter_tukin')->default(0);
            $table->string('pangkat_gol');
            $table->double('grade')->default(0);
            $table->double('bank_bjb')->default(0);
            $table->double('kas_kasi')->default(0);
            $table->double('fiskawati')->default(0);
            $table->double('muslimah')->default(0);
            $table->double('kas_seksi')->default(0);
            $table->double('futsal')->default(0);
            $table->double('badminton')->default(0);
            $table->double('qurban')->default(0);
            $table->double('potongan_lain')->default(0);
            $table->string('sabcd', 1);
            $table->double('gjpokok')->default(0);
            $table->double('tjistri')->default(0);
            $table->double('tjanak')->default(0);
            $table->double('tjupns')->default(0);
            $table->double('tjstruk')->default(0);
            $table->double('tjfungs')->default(0);
            $table->double('pembul')->default(0);
            $table->double('tjberas')->default(0);
            $table->double('tjpph')->default(0);
            $table->double('potpfk10')->default(0);
            $table->double('potpph')->default(0);
            $table->double('bersih')->default(0);
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('bulan', range(1,12));
            $table->string('tahun', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}
