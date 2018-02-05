<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
                                       'username' => 'admin',
                                       'email' => 'bunny9@bk.ru',
                                       'password' => bcrypt('21211986'),
                                   ]);
    }
}
