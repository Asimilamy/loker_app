<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Renandika Galih',
            'username' => 'admin_galih',
            'email' => 'rengalih666@gmail.com',
            'password' => Hash::make('641820GWH17')
        ]);
    }
}
