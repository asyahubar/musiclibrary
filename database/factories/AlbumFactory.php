<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'title' => $faker->state,
        'cover_url' => $faker->imageUrl(300, 300, 'nature'),
        'artist_id' => rand(1, 10),
        'user_id' => 1
    ];
});
