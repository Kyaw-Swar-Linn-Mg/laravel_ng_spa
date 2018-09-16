<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->text(20),
        'author' => $faker->text(5)
    ];
});
