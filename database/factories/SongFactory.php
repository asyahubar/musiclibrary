<?php

use Faker\Generator as Faker;

$factory->define(\App\Song::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'artist_id' => rand(1, 10),
        'album_id' => rand(1, 20),
        'user_id' => 1
    ];
});
