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
                'name' => 'Renandika Galih',
                'username' => 'admin_galih',
                'email' => 'rengalih666@gmail.com',
                'password' => Hash::make('641820GWH17')
            ],
            1 => [
                'name' => 'Rio',
                'username' => 'admin_rio',
                'email' => 'rio@gmail.com',
                'password' => Hash::make('admin_rio')
            ]
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('users')->insert($data[$i]);
        }
    }
}
