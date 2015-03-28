<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model {

    public function question()
	{
		return $this->belongsToMany('\App\Question', 'questionTags');
	}

}
