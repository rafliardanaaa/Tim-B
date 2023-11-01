<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->id_pegawai_user = 1; // Sesuaikan dengan id pegawai yang sesuai
        $user->user_name = 'andi supriadi';
        $user->password = bcrypt('12345'); // Encrypt password
        $user->level = 'admin'; // Gantilah sesuai dengan level yang sesuai
        $user->save();
    }
}
