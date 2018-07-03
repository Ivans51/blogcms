<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $guarded  = [
		'name',
		'slug',
		'body'
	];

	public function posts() {
		return $this->hasMany( Post::class );
	}
}
