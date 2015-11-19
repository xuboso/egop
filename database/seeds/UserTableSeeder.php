<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'bude',
            'email' => 'budelo@gmail.com',
            'password' => 'k3idaln38d',
        ]);

        DB::table('users')->insert([
            'name' => 'kevion',
            'email' => 'kevino@gmail.com',
            'password' => '2jdijkdn$ikadnf',
        ]);
    }
}
