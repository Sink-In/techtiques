<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_slug($faker->name, '-'),
        'description' => $faker->text(20),
        'image' => str_slug($faker->name, '-') . '.jpg',
    ];
});
