<?php

namespace App\Resources;

use Faker\Factory as Faker;

class StatsResource {

    public function get_stats_by_type($type = 'day')
    {

        $action = "get_by_$type";

        if ( method_exists( $this, $action ) )
        {
            return $this->$action();
        }
        return null;
    }

    private function get_by_day()
    {
        return $this->get_stat();
    }

    private function get_by_week()
    {
        return $this->get_stat();
    }

    private function get_by_month()
    {
        return $this->get_stat();
    }

    private function get_by_year()
    {
        return $this->get_stat();
    }

    private function get_stat() {

        $faker = Faker::create();

        return [
            [ 'point' => $faker->numberBetween(50000, 70000), 'percent' => $faker->randomFloat(2, -100, 100), 'name' => 'visits'],
            [ 'point' => $faker->numberBetween(50000, 70000), 'percent' => $faker->randomFloat(2, -100, 100), 'name' => 'views'],
            [ 'point' => $faker->numberBetween(50000, 70000), 'percent' => $faker->randomFloat(2, -100, 100), 'name' => 'bounce_rate'],
        ];
    }

    public function list()
    {

    }
}