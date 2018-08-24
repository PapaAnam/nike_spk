<?php

use Illuminate\Database\Seeder;
use App\User;

class GenerateKaryawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::load('storage/app/karyawan.xlsx', function($reader){
        	$karyawan = [];
        	$data = $reader->get();
        	foreach ($data as $d) {
        		User::updateOrCreate([
        			'username'=>$d->nip,
        		],[
        			'password'=>bcrypt($d->nip),
        			'nama'=>$d->nama,
        			'role'=>'karyawan',
        			'nip'=>$d->nip
        		]);
        	}
        });
        echo "Karyawan berhasil digenerate";
    }
}
