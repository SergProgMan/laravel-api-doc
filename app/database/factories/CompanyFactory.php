<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'company_name' => $faker->word." ".$faker->word,
    ];
});