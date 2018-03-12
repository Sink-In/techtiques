<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_slug($faker->name, '-'),
        'description' => $faker->text(20),
        'image' => 'http://via.placeholder.com/400x600',
        'source' => str_slug($faker->name, '-'),
        'url' => str_slug($faker->name, '-')
    ];
});
