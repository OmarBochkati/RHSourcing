<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'description'=>$faker->sentence,
        'type_post'=>$faker->sentence,
        'date_publication'=>$faker->dateTimeAD,

    ];
});
