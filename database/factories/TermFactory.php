<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'image'=>$faker->word,
        'title'=>$faker->word,
        'number'=>$faker->randomNumber(),
        'description'=>$faker->word,
        'semester'=>$faker->randomNumber(),
    ];
});
