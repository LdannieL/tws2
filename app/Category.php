<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required|between:3,255',
		'slug' => 'required'
	];

	
	protected $fillable = ['name', 'slug', 'parent_id'];

	public function posts()
	{
        return $this->hasMany('App\Post');
    }

}
