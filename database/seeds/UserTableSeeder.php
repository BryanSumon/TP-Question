<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');

        DB::table('users')->insert(
            [
                [
                    'name'     => 'Laravel',
                    'email'    => 'bryan@bryan.com',
                    'password' => Hash::make('bryan')
                ],
            ]
        );
    }

}