<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tags')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');

        DB::table('tags')->insert(
            [
                [
                    'name'   => 'Laravel',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ],
                [
                    'name'   => 'PHP',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ],
                [
                    'name'   => 'MySQL',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ]
            ]
        );
    }

}