<?php

use Illuminate\Database\Seeder;
use App\Lembaga;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lembaga::insert([
            [
                "id"        => 1,
                "nama"      => "MI",
            ],
            [
                "id"        => 2,
                "nama"      => "Mts",
            ],
            [
                "id"        => 3,
                "nama"      => "MA",
            ]
        ]);
    }
}
