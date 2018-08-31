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

	public function create()
	{
		return view('karyawan.create',[
			'active'=>'karyawan.create'
		]);
	}

	public function store(Request $r)
	{
		$r->validate([
			'nip'=>'required|numeric',
			'nama'=>'required',
		]);
		User::updateOrCreate([
			'nip'=>$r->nip
		],[
			'nama'=>$r->nama,
			'username'=>$r->nip,
			'password'=>bcrypt($r->nip),
			'role'=>'karyawan',
		]);
		return redirect()->route('karyawan')->with('success_msg', 'Karyawan baru berhasil ditambahkan');
	}

}
