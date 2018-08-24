<?php

use Illuminate\Database\Seeder;
use App\Gaji;
use Faker\Factory;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Factory::create('id_ID');
        Gaji::updateOrCreate([
        	'id_user'=>5,
        	'bulan'=>1,
        	'tahun'=>2018,
        ],[
        	'gaji'=>$faker->numberBetween(200000, 5000000),
        	'uang_makan'=>$faker->numberBetween(200000, 5000000),
        	'rapel_tkpkn'=>$faker->numberBetween(200000, 5000000),
        	'rapel_uang_makan'=>$faker->numberBetween(200000, 5000000),
        	'uang_lembur'=>$faker->numberBetween(200000, 5000000),
        	'tunjangan_pokok'=>$faker->numberBetween(200000, 5000000),
        	'tunjangan_tambahan'=>$faker->numberBetween(200000, 5000000),
        	'potongan_absensi'=>$faker->numberBetween(200000, 5000000),
        	'nett'=>$faker->numberBetween(200000, 5000000),
        	'rapel_tkpkn_gaji'=>$faker->numberBetween(200000, 5000000),
        	'total'=>$faker->numberBetween(200000, 5000000),
        	'bri'=>$faker->numberBetween(200000, 5000000),
        	'emas_qurban'=>$faker->numberBetween(200000, 5000000),
        	'zakat'=>$faker->numberBetween(200000, 5000000),
        	'infak_dll'=>$faker->numberBetween(200000, 5000000),
        	'aasuh'=>$faker->numberBetween(200000, 5000000),
        	'pot_satu_persen'=>$faker->numberBetween(200000, 5000000),
        	'fee_payroll'=>$faker->numberBetween(200000, 5000000),
        	'jumlah_potongan'=>$faker->numberBetween(200000, 5000000),
        	'jumlah_bersih'=>$faker->numberBetween(200000, 5000000),
        	'rekening'=>'433929328932898392',
        	'jabatan'=>'IT Consultant',
        	'seksi_kelompok'=>$faker->word,
        	'parameter_tukin'=>$faker->numberBetween(200000, 5000000),
        	'pangkat_gol'=>$faker->word,
        	'grade'=>$faker->numberBetween(200000, 5000000),
        	'bank_bjb'=>$faker->numberBetween(200000, 5000000),
        	'kas_kasi'=>$faker->numberBetween(200000, 5000000),
        	'fiskawati'=>$faker->numberBetween(200000, 5000000),
        	'muslimah'=>$faker->numberBetween(200000, 5000000),
        	'kas_seksi'=>$faker->numberBetween(200000, 5000000),
        	'futsal'=>$faker->numberBetween(200000, 5000000),
        	'badminton'=>$faker->numberBetween(200000, 5000000),
        	'qurban'=>$faker->numberBetween(200000, 5000000),
        	'potongan_lain'=>$faker->numberBetween(200000, 5000000),
        	'sabcd'=>$faker->randomElement(['A','B','C','D','S']),
        	'gjpokok'=>$faker->numberBetween(200000, 5000000),
        	'tjistri'=>$faker->numberBetween(200000, 5000000),
        	'tjanak'=>$faker->numberBetween(200000, 5000000),
        	'tjupns'=>$faker->numberBetween(200000, 5000000),
        	'tjstruk'=>$faker->numberBetween(200000, 5000000),
        	'tjfungs'=>$faker->numberBetween(200000, 5000000),
        	'pembul'=>$faker->numberBetween(200000, 5000000),
        	'tjberas'=>$faker->numberBetween(200000, 5000000),
        	'tjpph'=>$faker->numberBetween(200000, 5000000),
        	'kas'=>$faker->numberBetween(200000, 5000000),
        	'potpfk10'=>$faker->numberBetween(200000, 5000000),
        	'potpph'=>$faker->numberBetween(200000, 5000000),
        	'bersih'=>$faker->numberBetween(200000, 5000000)
        ]);
    }
}
