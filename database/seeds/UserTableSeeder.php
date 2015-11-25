<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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
            'password' => bcrypt('k3idaln38d'),
        ]);

        DB::table('users')->insert([
            'name' => 'kevion',
            'email' => 'kevino@gmail.com',
            'password' => bcrypt('2jdijkdn$ikadnf'),
        ]);
    }
}
