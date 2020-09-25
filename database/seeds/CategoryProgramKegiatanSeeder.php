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
        $wrap = [[
            "id"    => 1,
            "nama" => "Forum MGMP"
        ],
        [
            "id"    => 2,
            "nama" => "Unit"
        ],
        [
            "id"    => 3,
            "nama" => "Penjaminan Mutu"
        ],
        [
            "id"    => 4,
            "nama" => "Balai Latihan Kerja"
        ],
        [
            "id"    => 5,
            "nama" => "Publikasi"
        ]
        ];

        foreach($wrap as $item){
            CategoryProgramKegiatan::create($item);
        }
        
    }
}
