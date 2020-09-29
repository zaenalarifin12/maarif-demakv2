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
         * FOR ARTICLE
         */
        Category::insert([
            [
                "id"    => 1,
                "nama"  => "Berita",        
                "slug"  => "berita",        
                "color" => "#07689f"
            ],
            [
                "id"    => 2,
                "nama"  => "Pengumuman",    
                "slug"  => "pengumuman",        
                "color" => "#00416d"
            ],
            [
                "id"    => 3,
                "nama"  => "Agenda",   
                "slug"  => "agenda",             
                "color" => "#e11d74"
            ],
            // [
                //     "id"    => 4,
                //     "nama" => "balai latihan kerja",
                //     "color" => "#440047"
            // ]
            // NOTE tambahan
            [
                "id"    => 5,
                "nama"  => "Beranda Pers",
                "slug"  => "beranda-pers",        
                "color" => "#440047"
            ]
        ]);
    }
}
