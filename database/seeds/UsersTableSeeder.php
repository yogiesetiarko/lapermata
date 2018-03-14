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
        DB::table('Users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
