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
                'password' => Hash::make('admin_galih'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            1 => [
                'name' => 'Rio',
                'username' => 'admin_rio',
                'email' => 'rio@email.com',
                'password' => Hash::make('admin_rio'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            2 => [
                'name' => 'Member',
                'username' => 'member',
                'email' => 'member@email.com',
                'password' => Hash::make('member'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            3 => [
                'name' => 'Company',
                'username' => 'company',
                'email' => 'company@email.com',
                'password' => Hash::make('company'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('users')->insert($data[$i]);
        }
    }
}
