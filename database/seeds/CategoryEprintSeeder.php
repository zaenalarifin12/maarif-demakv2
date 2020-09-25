<?php

use Illuminate\Database\Seeder;
use App\CategoryEprint;

class CategoryEprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryEprint::insert([
            [
                "id"    => 1,
                "nama"  => "Bahan Ajar",
            ],
            [
                "id"    => 2,
                "nama"  => "Perangkat Pembelajaran",
            ],
            [
                "id"    => 3,
                "nama"  => "Pengembangan Instrument Penilaian",
            ],
            [
                "id"    => 4,
                "nama"  => "Buku",
            ]
        ]);        
    }
}
