<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            CategoryProgramKegiatanSeeder::class,
            CategoryEprintSeeder::class,
            LembagaSeeder::class,
        ]);
    }
}
