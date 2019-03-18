<?php

namespace Hrm;

use Illuminate\Database\Seeder;


class SettingsSeeder extends Seeder
{
    private $settings = [
        [
            'attr' => 'working_days',
            'value' => [ ]
        ],
        [
            'attr' => 'week_begin',
            'value' => [ ]
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
            factory ( App\Models\Hrm\ConfigModel::class )->create ( $set );
        }
    }
}
