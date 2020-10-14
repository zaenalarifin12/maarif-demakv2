<?php

use Illuminate\Database\Seeder;
use App\JajaranPengurus;

class JajaranPengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jajaran = [

            [
                "id"        => 1,
                "nama"      => "Ketua PC LP Ma'arif NU", 
                "posisi"    => 1,
                "type"      => 1
            ],
            [
                "id"        => 2,
                "nama"      => "Wakil Ketua", 
                "posisi"    => 2,
                "type"      => 0
            ],
            [
                "id"        => 3,
                "nama"      => "Sekertaris", 
                "posisi"    => 3,
                "type"      => 1
            ],
            [
                "id"        => 4,
                "nama"      => "Wakil Sekertaris", 
                "posisi"    => 4,
                "type"      => 0
            ],
            [
                "id"        => 5,
                "nama"      => "Bendahara", 
                "posisi"    => 5,
                "type"      => 1
            ],
            [
                "id"        => 6,
                "nama"      => "Wakil Bendahara", 
                "posisi"    => 6,
                "type"      => 0
            ],
            [
                "id"        => 7,
                "nama"      => "Bendahara", 
                "posisi"    => 7,
                "type"      => 1
            ],
            [
                "id"        => 8,
                "nama"      => "Koordinator bidang SMA/SMK", 
                "posisi"    => 8,
                "type"      => 0
            ],
            [
                "id"        => 9,
                "nama"      => "Koordinator Bidang MA", 
                "posisi"    => 9,
                "type"      => 0
            ],
            [
                "id"        => 10,
                "nama"      => "Koordinator Bidang Mts", 
                "posisi"    => 10,
                "type"      => 0
            ],
            [
                "id"        => 11,
                "nama"      => "Koordinator Bidang SD", 
                "posisi"    => 11,
                "type"      => 0
            ],
            [
                "id"        => 12,
                "nama"      => "Koordinator Bidang MI", 
                "posisi"    => 12,
                "type"      => 0
            ],
            
        ];

        foreach($jajaran as $key){
            JajaranPengurus::updateOrCreate(
                ["id" => $key["id"]],
                [
                    "nama"      => $key["nama"], 
                    "posisi"    => $key["posisi"],
                    "type"      => $key["type"]
                ],            
            );
        }
            
            
            
    }
}
