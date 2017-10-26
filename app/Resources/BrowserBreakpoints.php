<?php

namespace App\Resources;

use App\Resources\Resource;
use Faker\Factory as Faker;

class BrowserBreakpoints extends Resource
{
    public function get_list()
    {
        $faker = Faker::create();

        $data = [];

        for ( $i = 1; $i <=5; $i ++ ) {
            $data[] = [
                'name'  => $faker->bothify('Browser ???'),
                'engine' => $faker->bothify('Webkit #'),
                'platform' => $faker->bothify('Win #k+ / OSX.#+'),
                'activities' => [
                    'history' => $faker->randomElements([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20], 5),
                    'value' => $faker->randomFloat(2,0,100),
                ]
            ];
        }

        return $data;
    }
}

