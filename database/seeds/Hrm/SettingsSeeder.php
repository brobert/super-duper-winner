<?php

namespace Database\Seeds\Hrm;

use App\Models\Hrm\ConfigModel as ConfigModel;
use Illuminate\Database\Seeder;


class SettingsSeeder extends Seeder
{

    private $settings = [
        [
            'attr' => 'working_days',
            'value_json' => [
                1,
                2,
                3,
                4,
                5
            ]
        ],
        [
            'attr' => 'week_begin',
            'value_json' => [
                1
            ]
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ( $this->settings as $set )
        {
            factory(ConfigModel::class)->create($set);
        }

        factory(ConfigModel::class, 10)->create();
    }
}
