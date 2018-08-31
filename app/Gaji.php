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

	protected $appends = [
		'nama_bulan',
	];

	public function karyawan()
	{
		return $this->belongsTo('App\User', 'id_user');
	}


	public function getNamaBulanAttribute()
	{
		return $this->getNamaBulan($this->bulan);
	}

	private function getNamaBulan($bulan)
	{
		switch ($bulan) {
			case '01': return 'Januari'; break;
			case '02': return 'Februari'; break;
			case '03': return 'Maret'; break;
			case '04': return 'April'; break;
			case '05': return 'Mei'; break;
			case '06': return 'Juni'; break;
			case '07': return 'Juli'; break;
			case '08': return 'Agustus'; break;
			case '09': return 'September'; break;
			case '10': return 'Oktober'; break;
			case '11': return 'November'; break;
			case '12': return 'Desember'; break;
			default: return 'Tidak valid!!!'; break;
		}
	}

}
