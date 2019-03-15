<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Create Admin user
         */
        if (env('ADMIN_USER_NAME') && env('ADMIN_USER_EMAIL') && env('ADMIN_USER_PASS'))
        {
            factory(App\Models\User::class)->create(array(
                'name' => env('ADMIN_USER_NAME'),
                'last_name' => env('ADMIN_USER_LAST_NAME'),
                'email' => env('ADMIN_USER_EMAIL'),
                'password' => bcrypt(env('ADMIN_USER_PASS'))
            ));
        }

        factory(App\Models\User::class, 10)->create();
    }
}
