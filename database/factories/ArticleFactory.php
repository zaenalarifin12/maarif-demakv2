<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'banner'        => $faker->image("public/storage",1280,960) , // folder
        'judul'         => $faker->text,
        'deskripsi'     => $faker->text($maxNbChars = 10000),
        'category_id'   => $faker->randomElement([1,2,3,5]),
    ];
});
