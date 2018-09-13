<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PasswordController extends Controller
{
    
    public function edit()
    {
    	return view('ubah-password');
    }

    public function update(Request $r)
    {
    	$r->validate([
    		'password'=>'required|min:5'
    	]);
    	$r->user()->update([
    		'password'=>bcrypt($r->password)
    	]);
    	return redirect()->back()->with('status','Password berhasil diperbarui :)');
    }

    public function editOlehAdmin($id)
    {
        $karyawan = User::find($id);
        return view('karyawan.ubah-password',[
            'd'=>$karyawan
        ]);
    }

    public function perbaruiOlehAdmin(Request $r, $id)
    {
        $r->validate([
            'password'=>'required|min:5'
        ]);
        $karyawan = User::find($id);
        $karyawan->update([
            'password'=>bcrypt($r->password)
        ]);
        return redirect()->route('karyawan')->with('success_msg', 'Password berhasil diperbarui');
    }

}
