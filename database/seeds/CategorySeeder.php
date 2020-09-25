<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * NOTE 
         * FOR INFORMASI
         */
        Category::insert([
            [
                "id"    => 1,
                "nama" => "berita",        
                "color" => "#07689f"
            ],
            [
                "id"    => 2,
                "nama" => "pengumuman",    
                "color" => "#00416d"
            ],
            [
                "id"    => 3,
                "nama" => "agenda",        
                "color" => "#e11d74"
            ],
            // [p
            // [
            //     "id"    => 4,
            //     "nama" => "balai latihan kerja",
            //     "color" => "#440047"
            // ]
        ]);
    }
}
