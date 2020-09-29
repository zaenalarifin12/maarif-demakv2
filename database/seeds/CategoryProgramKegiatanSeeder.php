<?php

use Illuminate\Database\Seeder;
use App\CategoryProgramKegiatan;

class CategoryProgramKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wrap = [
            [
                "id"    => 1,
                "nama" => "Forum MGMP",
                "slug" => "forum-mgmp"
            ],
            [
                "id"    => 2,
                "nama"  => "Unit",
                "slug"  => "unit"
            ],
            [
                "id"    => 3,
                "nama"  => "Penjaminan Mutu",
                "slug"  => "penjaminan-mutu"
            ],
            [
                "id"    => 4,
                "nama"  => "Balai Latihan Kerja",
                "slug"  => "balai-latihan-kerja"
            ],
            [
                "id"    => 5,
                "nama" => "Publikasi",
                "slug" => "publikasi"
            ],
            [
                "id"    => 6,
                "nama" => "UNITENDIK",
                "slug" => "unitendik"
            ]
        ];

        foreach($wrap as $item){
            CategoryProgramKegiatan::create($item);
        }
        
    }
}
