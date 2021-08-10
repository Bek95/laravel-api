<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Topicality;
use Faker\Generator as Faker;

$factory->define(Topicality::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'content' => $faker->paragraphs(3, true),
    ];
});
