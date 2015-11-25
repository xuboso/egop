<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Permission;

class AttachPermissoinToRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // su permissoin
        $permission_su = Permission::where('name', 'all')->first();

        // admin permission
        $create_user = Permission::where('name', 'create-user')->first();
        $update_user = Permission::where('name', 'update-user')->first();
        $drop_user = Permission::where('name', 'drop-user')->first();
        $permission_admin = [$create_user, $update_user, $drop_user];

        $role_su = Role::where('name', 'su')->first();
        $role_su->attachPermission($permission_su);

        $role_admin = Role::where('name', 'admin')->first();
        $role_admin->attachPermissions($permission_admin);
    }
}
