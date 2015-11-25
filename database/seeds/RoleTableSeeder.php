<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'su',
            'display_name' => 'super user',
            'description' => 'super user have all permissons',
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'admin user',
            'description' => 'admin user is allowed to manage and edit other users',
        ]);

        DB::table('roles')->insert([
            'name' => 'seller',
            'display_name' => 'seller user',
            'description' => 'seller user can have a shop to sell things',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'display_name' => 'ordinary user',
            'description' => 'ordinay user is just a user',
        ]);
    }
}
