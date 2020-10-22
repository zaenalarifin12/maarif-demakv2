<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KaryaIlmiah;
use Faker\Generator as Faker;

$factory->define(KaryaIlmiah::class, function (Faker $faker) {
    return [
        'cover'        => $faker->image($dir = "public/storage", $width = 1280, $height = 960, $fullPath = false) , // folder
        'judul'         => $faker->text,
        'deskripsi'     => $faker->text($maxNbChars = 10000),
        'category_id'   => $faker->randomElement([1,2,3,5]),
    ];
});
