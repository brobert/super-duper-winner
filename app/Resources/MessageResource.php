<?php

namespace App\Resources;

use App\Resources\Resource;

use Carbon\Carbon;
use Faker\Factory as Faker;

class MessageResource extends Resource
{
    public function get_messages()
    {
        $data = [];

        $faker = Faker::create();

        for ($i=0; $i <=7; $i++)
        {
            $data[] = (object) [
                'title' => $faker->text(20),
                'body'  => $faker->text(),
                'created_at' => $faker->dateTimeBetween('-1 hour', 'now'),
                'sender' => (object) [
                    'full_name' => $faker->name(),
                ]
            ];
        }

        return $data;
    }
}