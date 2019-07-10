<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Memo;
use Faker\Generator as Faker;

$factory->define(Memo::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->text(50),
        'content' => $faker->text(300)
    ];
});
