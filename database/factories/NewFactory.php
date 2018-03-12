<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_slug($faker->name, '-'),
        'description' => $faker->text(20),
        'image' => str_slug($faker->name, '-') . '.jpg',
        'source' => str_slug($faker->name, '-'),
        'url' => str_slug($faker->name, '-')
    ];
});
