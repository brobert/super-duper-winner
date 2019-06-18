<?php
use Faker\Generator as Faker;

use App\Models\Hrm\ConfigModel as ConfigModel;

$factory->define(ConfigModel::class, function (Faker $faker)
{
    $data = [
        'attr' => $faker->word,
        'value_json' => json_encode($faker->randomElements(array(
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            0
        ), $count = 5))
    ];

    return $data;
});
