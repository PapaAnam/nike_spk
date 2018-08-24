<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsernameController extends Controller
{

	public function edit()
	{
		return view('ubah-username');
	}

	public function update(Request $r)
	{
		$r->validate([
			'username'=>'required|min:5|unique:users'
		]);
		$r->user()->update([
			'username'=>$r->username
		]);
		return redirect()->back()->with('status','Username berhasil diperbarui :)');
	}

}
