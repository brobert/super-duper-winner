<?php
use Faker\Generator as Faker;

$factory->define(App\Models\Hrm\FreeDay::class, function (Faker $faker)
{
    return [
        'name' => $faker->sentence(2),
        'year' => $faker->randomElement(array(
            2019,
            2020,
            2019,
            2019,
            2019,
            2020,
            null
        )),
        'month' => $faker->month,
        'day' => $faker->dayOfMonth
    ];
});
