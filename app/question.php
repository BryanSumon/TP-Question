<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model {

    public function tag()
	{
		return $this->belongsToMany('\App\Tag', 'questionTags');
	}

}
