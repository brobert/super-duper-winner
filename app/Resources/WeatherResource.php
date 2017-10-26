<?php

namespace App\Resources;

use Faker\Factory as Faker;

class WeatherResource {

    public function get()
    {
        $faker = Faker::create();

        return [
            'city'      => $faker->city(),
            'country'   => $faker->countryISOAlpha3(),
            'summary'   => array_random(['cloud', 'weather-rain', 'snowflake', 'windy', 'weather-snow', 'moon2', 'weather-lightning', 'sun22']),
            'temp'      => $faker->numberBetween(-15, 35),
            'temp_prev' => $faker->numberBetween(-15, 35),
            'temp_next' => $faker->numberBetween(-15, 35),
        ];
    }
}