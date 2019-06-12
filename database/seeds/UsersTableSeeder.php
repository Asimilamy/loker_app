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
        $data = [
            0 => [
                'name' => 'Galih',
                'username' => 'admin_galih',
                'email' => 'galih@email.com',
                'password' => Hash::make('admin_galih')
            ],
            1 => [
                'name' => 'Rio',
                'username' => 'admin_rio',
                'email' => 'rio@email.com',
                'password' => Hash::make('admin_rio')
            ],
            2 => [
                'name' => 'Member',
                'username' => 'member',
                'email' => 'member@email.com',
                'password' => Hash::make('member')
            ],
            3 => [
                'name' => 'Company',
                'username' => 'company',
                'email' => 'company@email.com',
                'password' => Hash::make('company')
            ],
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('users')->insert($data[$i]);
        }
    }
}
