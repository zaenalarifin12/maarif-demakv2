<?php

use Illuminate\Database\Seeder;
use App\Lembaga;
use App\MataPelajaran;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mi = ["FGMI"]  ;

        $mts = [
            "ALQURAN HADIST",
            "AQIDAH AKHLAQ",
            "FIQIH",
            "SKI",
            "PPKn",
            "BAHASA INDONESIA",
            "BAHASA ARAB",
            "MATEMATIKA",
            "IPA",
            "IPS",
            "BAHASA INGGRIS",
            "SENI BUDAYA",
            "PJOK",
            "PRAKARYA/INTERNET",
            "KE-NU-AN",
            "BAHASA JAWA",
        ];

        $ma = [
            "ALQURAN HADIST",
            "AQIDAH AKHLAQ",
            "FIQIH",
            "SKI",
            "PPKn",
            "BAHASA INDONESIA",
            "MATEMATIKA",
            "SEJARAH INDONESIA",
            "BAHASA INGGRIS",
            "SENI BUDAYA",
            "PJOK",
            "PRAKARYA DAN KEWIRAUSAHAAN",
            "BAHASA JAWA",
            "KE-NU-AN",
            "BAHASA ARAB",
        ];

        foreach ($mi as $key => $value) {
            MataPelajaran::create([
                "nama"          => $value,
                "lembaga_id"    => 1
            ]);
        }

        foreach ($mts as $key => $value) {
            MataPelajaran::create([
                "nama"          => $value,
                "lembaga_id"    => 2
            ]);
        }

        foreach ($ma as $key => $value) {
            MataPelajaran::create([
                "nama"          => $value,
                "lembaga_id"    => 3
            ]);
        }

    }
}
