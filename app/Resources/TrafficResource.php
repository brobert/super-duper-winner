<?php

namespace App\Resources;

use App\Resources\Resource;

use Carbon\Carbon;
use Faker\Factory as Faker;


class TrafficResource extends Resource
{

    public function get_by_day()
    {
        $faker = Faker::create();

        return [
            'date' => Carbon::now(),
            'visits' => $faker->numberBetween(50000, 100000),
            'u_visits'  => $faker->numberBetween(5000, 50000),
            'sources' => [
                ['name' => $faker->company(), 'visits' => $faker->numberBetween(5000, 50000), 'u_visits' => $faker->numberBetween(5000, 50000)],
                ['name' => $faker->company(), 'visits' => $faker->numberBetween(5000, 50000), 'u_visits' => $faker->numberBetween(5000, 50000)],
                ['name' => $faker->company(), 'visits' => $faker->numberBetween(5000, 50000), 'u_visits' => $faker->numberBetween(5000, 50000)],
                ['name' => $faker->company(), 'visits' => $faker->numberBetween(5000, 50000), 'u_visits' => $faker->numberBetween(5000, 50000)],
            ]
        ];
    }
}