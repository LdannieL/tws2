<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required|between:3,255',
		'body' => 'required',
		'author_id' => 'integer',
	];

	
	protected $fillable = ['title', 'body', 'author_id', 'video', 'gallery_img_1', 'gallery_img_2', 'gallery_img_3', 'display_gallery_as_slider', 'parent_id', 'series_intro', 'has_complex_body'];

	public function user()
    {
        return $this->belongsTo('App\User', 'author_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public static function popular($limit = 3)
    {
        return static::orderBy('created_at','desc')->where('featured', 1)->get()->take($limit);
    }

    public static function recent($limit = 3)
    {
    	return static::orderBy('created_at','desc')->get()->take($limit);
    }

    public function hasVideo() 
    {
        return isset($this->video) ? true : false;
    }

    public function hasGallery() 
    {
        if (isset($this->gallery_img_1) && $this->display_gallery_as_slider == 0) return true;
        return false;
    }

    public function hasSlider() 
    {
        return $this->display_gallery_as_slider;
    }

    public function isSeriesIntro() 
    {
        return isset($this->series_intro) ? true : false;
    }

    public static function getChildPosts($id)
    {
        return static::orderBy('created_at','asc')->where('parent_id', $id)->get();
    }

    public function getParentPost($parentId) 
    {
        return $this->where('id', $parentId)->first();
    }
}
