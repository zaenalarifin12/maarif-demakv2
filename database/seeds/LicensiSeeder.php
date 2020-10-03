<?php

use Illuminate\Database\Seeder;
use App\Licensi;

class LicensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Licensi::query()->truncate();

        Licensi::create([
            "nama"      => "maarif",
            "alamat"    => "maarif",
            "email"     => "maarif",
            "telepone"  => "08908989",
            "faks"      => "08908989",
            "jadwal"    => "maarif",
            "hotline"   => "maarif",
            "facebook"  => "maarif",
            "instagram" => "maarif",
            "youtube"   => "maarif",
            "twitter"   => "maarif",
        ]);
    }
}
