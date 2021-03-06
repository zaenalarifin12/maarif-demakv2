<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'banner'        => $faker->image($dir = "public/storage", $width = 1280, $height = 960, $fullPath = false) , // folder
        'judul'         => $faker->text,
        'deskripsi'     => $faker->text($maxNbChars = 10000),
        'category_id'   => $faker->randomElement([1,2,3,5]),
    ];
});
