<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionRoleSeeder extends Seeder
{

    /**
     * table 'roles'
     * +--------------+------------------+------+-----+---------+----------------+
     * | Field .......| Type ............| Null | Key | Default | Extra .........|
     * +--------------+------------------+------+-----+---------+----------------+
     * | id ..........| int(10) unsigned | NO ..| PRI | NULL ...| auto_increment |
     * | name ........| varchar(191) ....| NO ..| UNI | NULL ...| ...............|
     * | display_name | varchar(191) ....| YES .| ....| NULL ...| ...............|
     * | description .| varchar(191) ....| YES .| ....| NULL ...| ...............|
     * | created_at ..| timestamp .......| YES .| ....| NULL ...| ...............|
     * | updated_at ..| timestamp .......| YES .| ....| NULL ...| ...............|
     * +--------------+------------------+------+-----+---------+----------------+
     */
    private $roles = [
        'owner',
        'admin',
        'user'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ( $this->roles as $role )
        {
            DB::connection('mysql')->table('roles')->insert([
                'name' => $role,
                'display_name' => $role,
                'description' => $role
            ]);
        }
    }
}
