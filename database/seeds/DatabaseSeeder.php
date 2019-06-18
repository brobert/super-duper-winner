<?php
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PermissionRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(Database\Seeds\Hrm\FreeDaysSeeder::class);
        $this->call(Database\Seeds\Hrm\SettingsSeeder::class);
    }
}
