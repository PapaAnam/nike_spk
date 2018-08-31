<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KalimatBijak;

class KalimatBijakController extends Controller
{

	public function index()
	{
		$kalimatBijak = KalimatBijak::orderBy('bulan')->orderBy('tahun')->get();
		$kalimatBijak->transform(function($item){
			$item = collect($item);
			$item->transform(function($item2, $key){
				if($key == 'bulan'){
					return $this->getNamaBulan($item2);
				}
				return $item2;
			});
			return $item;
		});
		return view('kalimat-bijak.index', [
			'data'=>$kalimatBijak,
			'active'=>'kalimat-bijak'
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

}
