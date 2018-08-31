<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{

	public $timestamps = false;

	protected $table = 'gaji';

	protected $fillable = [
		'gaji', 'uang_makan', 'rapel_tkpkn', 'rapel_uang_makan', 'uang_lembur', 'tunjangan_pokok', 'tunjangan_tambahan', 'potongan_absensi', 'nett', 'rapel_tkpkn_gaji', 'total', 'bri', 'emas_qurban', 'zakat', 'infak_dll', 'aasuh', 'pot_satu_persen', 'fee_payroll', 'jumlah_potongan', 'jumlah_bersih', 'rekening', 'jabatan', 'seksi_kelompok', 'parameter_tukin', 'pangkat_gol', 'grade', 'bank_bjb', 'kas_kasi', 'fiskawati', 'muslimah', 'kas_seksi', 'futsal', 'badminton', 'qurban', 'potongan_lain', 'sabcd', 'gjpokok', 'tjistri', 'tjanak', 'tjupns', 'tjstruk', 'tjfungs', 'pembul', 'tjberas', 'tjpph', 'potpfk10', 'potpph', 'bersih', 'id_user', 'bulan', 'tahun', 'kas', 'nama_pemilik_rekening',
	];

	public function karyawan()
	{
		return $this->belongsTo('App\User', 'id_user');
	}


}
