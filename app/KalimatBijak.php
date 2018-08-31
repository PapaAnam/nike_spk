<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KalimatBijak extends Model
{

	public $timestamps = false;

	protected $table = 'kalimat_bijak';

	protected $fillable = [
		'bulan', 'tahun', 'kalimat_bijak'
	];

}
