<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'all',
            'display_name' => 'all previleges',
            'description' => 'has all previleges',
        ]);

        DB::table('permissions')->insert([
            'name' => 'create-user',
            'display_name' => 'create user',
            'description' => 'has create user previlege',
        ]);

        DB::table('permissions')->insert([
            'name' => 'update-user',
            'display_name' => 'update user info',
            'description' => 'has edit and update user info previlege',
        ]);

        DB::table('permissions')->insert([
            'name' => 'drop-user',
            'display_name' => 'drop-user',
            'description' => 'has delete a user from database previlege',
        ]);
    }
}
