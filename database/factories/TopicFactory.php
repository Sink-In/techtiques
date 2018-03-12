<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_slug($faker->name, '-'),
        'description' => $faker->text(20),
        'image' => 'http://via.placeholder.com/400x600',
    ];
});
