<?php

namespace Database\Seeds\Hrm;

use Illuminate\Database\Seeder;
use App\Models\Hrm\FreeDayModel as FreeDayModel;


class FreeDaysSeeder extends Seeder
{

    private $freeDays = [
        [
            'name' => 'Nowy Rok',
            'year' => null,
            'month' => 1,
            'day' => 1
        ],
        [
            'name' => 'Trzech Króli',
            'year' => null,
            'month' => 1,
            'day' => 6
        ],
        [
            'name' => 'Św. pracy',
            'year' => null,
            'month' => 5,
            'day' => 1
        ],
        [
            'name' => 'Rocznica uchwalenia Konstytucji',
            'year' => null,
            'month' => 5,
            'day' => 3
        ],
        [
            'name' => 'Św. Wojska Polskiego',
            'year' => null,
            'month' => 8,
            'day' => 15
        ],
        [
            'name' => 'Wszystkich Świętych',
            'year' => null,
            'month' => 11,
            'day' => 1
        ],
        [
            'name' => 'Rocznica odzyskania niepodległości',
            'year' => null,
            'month' => 11,
            'day' => 11
        ],
        [
            'name' => 'Boże Narodzenie',
            'year' => null,
            'month' => 12,
            'day' => 25
        ],
        [
            'name' => 'Św. Szczepana',
            'year' => null,
            'month' => 12,
            'day' => 25
        ],

        // 2019
        [
            'name' => 'Poniedziałek Wielkanocny',
            'year' => 2019,
            'month' => 4,
            'day' => 22
        ],
        [
            'name' => 'Boże Ciało',
            'year' => 2019,
            'month' => 6,
            'day' => 20
        ],

        // 2020
        [
            'name' => 'Poniedziałek Wielkanocny',
            'year' => 2020,
            'month' => 4,
            'day' => 13
        ],
        [
            'name' => 'Boże Ciało',
            'year' => 2020,
            'month' => 6,
            'day' => 11
        ],

        // 2021
        [
            'name' => 'Poniedziałek Wielkanocny',
            'year' => 2021,
            'month' => 4,
            'day' => 5
        ],
        [
            'name' => 'Boże Ciało',
            'year' => 2021,
            'month' => 6,
            'day' => 3
        ],

        // 2022
        [
            'name' => 'Poniedziałek Wielkanocny',
            'year' => 2022,
            'month' => 4,
            'day' => 18
        ],
        [
            'name' => 'Boże Ciało',
            'year' => 2022,
            'month' => 6,
            'day' => 16
        ],

        // 2023
        [
            'name' => 'Poniedziałek Wielkanocny',
            'year' => 2023,
            'month' => 4,
            'day' => 10
        ],
        [
            'name' => 'Boże Ciało',
            'year' => 2023,
            'month' => 6,
            'day' => 8
        ],

        // 2024
        [
            'name' => 'Poniedziałek Wielkanocny',
            'year' => 2024,
            'month' => 4,
            'day' => 1
        ],
        [
            'name' => 'Boże Ciało',
            'year' => 2024,
            'month' => 5,
            'day' => 30
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ( $this->freeDays as $fd )
        {
            factory(FreeDayModel::class)->create($fd);
        }
    }
}
