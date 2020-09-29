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
                'uuid'      => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'email'     => 'admin@gmail.com',
                "name"      => 'admin',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("admin1234"),
                "role"      => 4
            ],
            [   
                'uuid'      => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'email'     => 'adminmgmp@gmail.com',
                "name"      => 'admin mgmp',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("adminmgmp1234"),
                "role"      => 3
            ],
            [   
                'uuid'      => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'email'     => 'anggotamgmp@gmail.com',
                "name"      => 'anggota mgmp',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("anggota1234"),
                "role"      => 2
            ],
            [   
                'uuid'      => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'email'     => 'siswa@gmail.com',
                "name"      => 'siswa',
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password"  => Hash::make("siswa1234"),
                "role"      => 1
            ]
        ]);
    }
}
