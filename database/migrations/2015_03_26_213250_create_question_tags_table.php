<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionTags', function(Blueprint $table)
		{
			$table->integer('question_id')->unsigned();
			$table->integer('tag_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions')
						->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questionTags');
	}

}