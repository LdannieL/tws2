<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($category_slug = 'all')
	{
		if ($category_slug !== 'all') {
			$category_id = Category::where('slug', '=', $category_slug)->first()->id;
			$posts =  Post::where('status', 'PUBLISHED')->where('category_id', '=', $category_id)->whereNull('parent_id')->orWhere('parent_id', 0)->with('user')->latest()->simplePaginate(5);
		} else {
        	$posts =  Post::where('status', 'PUBLISHED')->whereNull('parent_id')->orWhere('parent_id', 0)->with('user')->latest()->simplePaginate(5);
        }
        return view('posts.index', compact('posts'));
	}

	public function show($slug)
	{
        $post = Post::where('slug', '=', $slug)->with('user')->first();
        return view('posts.post', compact('post'));
	}
}