<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionTagsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('questionTags')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');

        DB::table('questionTags')->insert(
            [
                [
                    'question_id' => '1',
                    'tag_id'      => '1',
                ],
                [
                    'question_id' => '2',
                    'tag_id'      => '2',

                ],
                [
                    'question_id' => '3',
                    'tag_id'      => '3',

                ],
                [
                    'question_id' => '4',
                    'tag_id'      => '2',
                ],
                [
                    'question_id' => '5',
                    'tag_id'      => '1',

                ],
                [
                    'question_id' => '4',
                    'tag_id'      => '1',
                ]
            ]
        );
    }

}