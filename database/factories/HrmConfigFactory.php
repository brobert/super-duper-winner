<?php
use Faker\Generator as Faker;

$factory->define ( App\Models\Hrm\ConfigModel::class, function (Faker $faker) {
    return [
        'attr' => $faker->word,
        'value' => [ ]
    ];
} );
