<?php
use Illuminate\Database\Seeder;


class FreeDaysSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        factory(App\Models\Hrm\FreeDay::class, 30)->create();
    }
}
