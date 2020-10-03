<?php

use Illuminate\Database\Seeder;
use App\VisiMisi;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licensi::query()->truncate();

        VisiMisi::create([
            "deskripsi" => "test visi misi"
        ]);
    }
}
