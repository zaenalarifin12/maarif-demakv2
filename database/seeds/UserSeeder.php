<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        User::insert([
            [
                'email'     => 'admin@gmail.com',
                "name"      => 'admin',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("admin1234"),
                "status"    => 1,
                "role"      => 4
            ],
            [   'email'     => 'adminmgmp@gmail.com',
                "name"      => 'admin mgmp',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("adminmgmp1234"),
                "status"    => 1,
                "role"      => 3
            ],
            [   'email'     => 'anggotamgmp@gmail.com',
                "name"      => 'anggota mgmp',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("anggota1234"),
                "status"    => 1,
                "role"      => 2
            ],
            [   'email'     => 'siswa@gmail.com',
                "name"      => 'siswa',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("siswa1234"),
                "status"    => 1,
                "role"      => 1
            ]
        ]);
    }
}
