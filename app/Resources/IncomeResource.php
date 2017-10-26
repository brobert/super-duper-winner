<?php

namespace App\Resources;

use App\Resources\Resource;

use Faker\Factory as Faker;

class IncomeResource extends Resource{

    public function get_by_day()
    {
        $faker = Faker::create();

        return $faker->randomFloat(2, -10000,1000);
    }

    public function get_by_week( $period = 'week')
    {

    }
}