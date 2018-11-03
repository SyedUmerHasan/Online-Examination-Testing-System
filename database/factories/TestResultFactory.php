<?php

use Faker\Generator as Faker;

$factory->define(App\TestResult::class, function (Faker $faker) {
    return [
        'test_id' => $faker->randomDigit,
        'test_category' => $faker->text(50),
        'user_id' => $faker->randomDigit,
        'question_id' => $faker->randomDigit,
        'submittedanswer' => $faker->text(50)
    ];
});
