<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
