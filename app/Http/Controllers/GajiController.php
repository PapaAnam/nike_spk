<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gaji;
use App\KalimatBijak;
use Storage;
use Excel;

class GajiController extends Controller
{

	private function getBulan()
	{
		return [
			'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
		];
	}

	private function getTahun()
	{
		return range(2018, date('Y'));
	}

	public function index(Request $r)
	{
		$bulan = $r->query('bulan');
		$tahun = $r->query('tahun');
		$gaji = [];
		if($bulan && $tahun){
			$gaji = Gaji::where('bulan',$bulan)->where('tahun',$tahun)->get();
		}
		return view('gaji.index', [
			'data'=>$gaji,
			'bulan'=>$this->getBulan(),
			'tahun'=>$this->getTahun(),
			'active'=>'gaji',
			'namaBulan'=>$r->query('bulan') ? $this->getBulan()[(int) ($r->query('bulan')-1)] : ''
		]);
	}

	public function baru()
	{
		return view('gaji.tambah', [
			'bulan'=>$this->getBulan(),
			'tahun'=>$this->getTahun(),
			'active'=>'gaji',
			'karyawan'=>User::karyawan()->get(),
			'd'=>null,
		]);
	}

	public function cek(Request $r)
	{
		$karyawan = $r->query('karyawan');
		$bulan = $r->query('bulan');
		$tahun = $r->query('tahun');
		if($bulan == 1){
			$bulan = 12;
			$tahun = $tahun - 1;
		}else{
			$bulan = $bulan - 1;
		}
		$gaji = Gaji::where('id_user', $karyawan)->where('bulan', $bulan)->where('tahun', $tahun)->first();
		// return $gaji;
		return view('gaji.cek',[
			'd'=>$gaji
		]);
	}

	public function store(Request $r)
	{
		$r->validate([
			'gaji'=>'required|numeric',
			'uang_makan'=>'numeric',
			'rapel_tkpkn'=>'numeric',
			'rapel_uang_makan'=>'numeric',
			'uang_lembur'=>'numeric',
			'tunjangan_pokok'=>'numeric',
			'tunjangan_tambahan'=>'numeric',
			'potongan_absensi'=>'numeric',
			'nett'=>'numeric',
			'rapel_tkpkn_gaji'=>'numeric',
			'total'=>'numeric',
			'bri'=>'numeric',
			'emas_qurban'=>'numeric',
			'zakat'=>'numeric',
			'infak_dll'=>'numeric',
			'aasuh'=>'numeric',
			'kas'=>'numeric',
			'pot_satu_persen'=>'numeric',
			'fee_payroll'=>'numeric',
			'jumlah_potongan'=>'numeric',
			'jumlah_bersih'=>'numeric',
			'rekening'=>'numeric',
			'jabatan'=>'required',
			'seksi_kelompok'=>'required',
			'parameter_tukin'=>'numeric',
			'pangkat_gol'=>'required',
			'grade'=>'numeric',
			'bank_bjb'=>'numeric',
			'kas_kasi'=>'numeric',
			'fiskawati'=>'numeric',
			'muslimah'=>'numeric',
			'kas_seksi'=>'numeric',
			'futsal'=>'numeric',
			'badminton'=>'numeric',
			'qurban'=>'numeric',
			'potongan_lain'=>'numeric',
			'sabcd'=>'required|string',
			'gjpokok'=>'numeric',
			'tjistri'=>'numeric',
			'tjanak'=>'numeric',
			'tjupns'=>'numeric',
			'tjstruk'=>'numeric',
			'tjfungs'=>'numeric',
			'pembul'=>'numeric',
			'tjberas'=>'numeric',
			'tjpph'=>'numeric',
			'potpfk10'=>'numeric',
			'potpph'=>'numeric',
			'bersih'=>'numeric',
		]);
		$data = $r->all();
		Gaji::updateOrCreate([
			'bulan'=>$r->bulan,
			'tahun'=>$r->tahun,
			'id_user'=>$r->id_user
		],['sabcd'=>strtoupper($r->sabcd)]+$r->except('bulan','tahun','id_user','sabcd'));
		return redirect('/gaji?bulan='.$r->bulan.'&tahun='.$r->tahun)->with('status','Gaji baru berhasil ditambahkan :)');
	}

	public function saya(Request $r)
	{
		$tahun = $r->query('tahun');
		$gaji = [];
		if($tahun){
			$gaji = Gaji::where('tahun',$tahun)
			->where('id_user', $r->user()->id)
			->get();
		}
		return view('gaji.saya', [
			'data'=>$gaji,
			'tahun'=>$this->getTahun(),
			'active'=>'gaji-saya',
		]);
	}

	public function slip($id)
	{
		$tanggal = date('d').' '.$this->getNamaBulan(date('m')).' '.date('Y');
		$gaji = Gaji::with('karyawan')->where('id',$id)->first();
		$kl = KalimatBijak::where('bulan', $gaji->bulan)->where('tahun', $gaji->tahun)->first();
		return view('gaji.slip',[
			'd'=>$gaji,
			'kalimatBijak'=>is_null($kl) ? '' : $kl->kalimat_bijak,
			'namaBulan'=>$this->getBulan()[$gaji->bulan-1],
			'tanggal'=>$tanggal,
		]);
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

	public function imporExcel()
	{
		return view('gaji.impor-excel', [
			'bulan'=>$this->getBulan(),
			'tahun'=>$this->getTahun(),
			'active'=>'gaji',
		]);
	}

	public function imporPost(Request $r)
	{
		$r->validate([
			'bulan'=>'required',
			'tahun'=>'required',
			'excel'=>'required|mimes:xls,xlsx',
			'kalimat_bijak'=>'required'
		]);
		$path = $r->file('excel')->store('impor-excel');
		Excel::load('storage/app/'.$path, function($reader) use ($r){
			$bulan = $r->bulan;
			$tahun = $r->tahun;
			$data = $reader->get();
			foreach($data as $gaji){
				$nip = $gaji->nip;
				$user = User::where('nip', $nip)->first();
				if(!is_null($user)){
					$id_user = $user->id;
					$except = [
						'rekening',
						'nama_pemilik_rekening',
						'jabatan',
						'seksi_kelompok',
						'parameter_tukin',
						'pangkat_gol',
						'nip',
						'sabcd'
					];
					$gaji->transform(function($item, $key) use ($except){
						if($key == 'sabcd'){
							return strtoupper($item);
						}
						return in_array($key, $except) ? (String) $item : (Double) $item;
					});
					$storeData = $gaji->except('nip')->toArray();
					$gajidb = Gaji::updateOrCreate([
						'bulan'=>$r->bulan,
						'tahun'=>$r->tahun,
						'id_user'=>$id_user
					], $storeData);
				}
			}
		});
		Storage::deleteDirectory('impor-excel');
		KalimatBijak::updateOrCreate([
			'bulan'=>$r->bulan,
			'tahun'=>$r->tahun,
		],[
			'kalimat_bijak'=>$r->kalimat_bijak
		]);
		return redirect()->route('gaji')->with('success_msg', 'Impor dari excel berhasil dilakukan');
	}

}
