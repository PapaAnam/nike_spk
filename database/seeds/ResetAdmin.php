<?php

use Illuminate\Database\Seeder;
use App\User;

class ResetAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
        	'username'=>'admin',
        ], [
        	'password'=>bcrypt('admin'),
        	'nama'=>'Administrator'
        ]);
        echo 'Admin berhasil direset :)';
    }
}
