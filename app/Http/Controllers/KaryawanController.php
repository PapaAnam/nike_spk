<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class KaryawanController extends Controller
{

	public function index()
	{
		$karyawan = User::where('role', 'karyawan')->get();
		return view('karyawan.index', [
			'data'=>$karyawan,
			'active'=>'karyawan'
		]);
	}

}
