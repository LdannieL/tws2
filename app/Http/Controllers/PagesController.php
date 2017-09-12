<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Category;
use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pages =  Post::all()->latest()->simplePaginate(2);
        return view('pages.index', compact('pages'));
	}

	public function show($slug)
	{

		$page = Page::where('status', 'ACTIVE')->where('slug', '=', $slug)->first();
        // return view("pages.$slug", compact('page'));
        return view("pages.page", compact('page'));
	}
}