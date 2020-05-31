<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {

    return [
        'fname' => $faker->word,
        'lname' => $faker->word,
        'dob' => $faker->word,
        'nationality' => $faker->word,
        'preferred_hand' => $faker->word,
        'status' => $faker->word,
        'physical_acceleration' => $faker->randomDigitNotNull,
        'physical_pace' => $faker->randomDigitNotNull,
        'physical_power' => $faker->randomDigitNotNull,
        'physical_leg_power' => $faker->randomDigitNotNull,
        'physical_shooting_power' => $faker->randomDigitNotNull,
        'physical_flexibility' => $faker->randomDigitNotNull,
        'technical_ball_handling' => $faker->randomDigitNotNull,
        'technical_ball_reception' => $faker->randomDigitNotNull,
        'technical_passing_accuracy' => $faker->randomDigitNotNull,
        'technical_shooting_accuracy' => $faker->randomDigitNotNull,
        'technical_blocking' => $faker->randomDigitNotNull,
        'technical_swimming_technique' => $faker->randomDigitNotNull,
        'tamperament_anticipation' => $faker->randomDigitNotNull,
        'tamperament_concentration' => $faker->randomDigitNotNull,
        'tamperament_flair' => $faker->randomDigitNotNull,
        'tamperament_bravery' => $faker->randomDigitNotNull,
        'tamperament_leadership' => $faker->randomDigitNotNull,
        'tamperament_consistency' => $faker->randomDigitNotNull,
        'height' => $faker->randomDigitNotNull,
        'weight' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
