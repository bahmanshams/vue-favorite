<?php

/** @var Factory $factory */
use App\User;
use Illuminate\Database\Eloquent\Factory;

$factory->define(App\Post::class, function (Faker\Generator $faker) {
// Get a random user
    $user = User::inRandomOrder()->first();

// generate fake data for post
    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});
