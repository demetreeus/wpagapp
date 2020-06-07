<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PlayerPosition;
use Faker\Generator as Faker;

$factory->define(PlayerPosition::class, function (Faker $faker) {

    return [
        'player_id' => $faker->randomDigitNotNull,
        'position_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
