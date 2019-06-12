<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
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
                'user_id' => '2',
                'child_id' => '1',
                'type' => 'user',
            ],
            1 => [
                'user_id' => '3',
                'child_id' => '1',
                'type' => 'company',
            ],
        ];
        for ($i = 0; $i < count($data); $i++) {
            DB::table('user_types')->insert($data[$i]);
        }
    }
}
