<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// public function index($category_slug = 'all')
	// {
	// 	if ($category_slug !== 'all') {
	// 		$category_id = Category::where('slug', '=', $category_slug)->first()->id;
	// 		$posts =  Post::where('status', 'PUBLISHED')->where('category_id', '=', $category_id)->with('user')->latest()->simplePaginate(5);
	// 	} else {
 //        	$posts =  Post::where('status', 'PUBLISHED')->with('user')->latest()->simplePaginate(5);
 //        }
 //        return view('posts.index', compact('posts'));
	// }

	public function search(Request $request)
	{
		$search = $request->input('search');
        // $posts = Post::where('status', 'PUBLISHED')->where(function($query) use ($search) { 
        // 	$query->where('title', 'LIKE',"%{$search}%")->orWhere('body', 'LIKE',"%{$search}%");
        // })->latest()->simplePaginate(2);
        return Redirect::route('searchResult', [$search]);
        //return view('posts.searchresults', compact('posts'));
	}

	// public function searchResults($search)
	// {
	// 	//$search = $request->input('search');
 //        $posts = Post::where('status', 'PUBLISHED')->where(function($query) use ($search) { 
 //        	$query->where('title', 'LIKE',"%{$search}%")->orWhere('body', 'LIKE',"%{$search}%");
 //        })->latest()->simplePaginate(9);
 //        // return $posts;
 //        return view('posts.searchresults', compact('posts'));
	// }

	public function ssearchResults(Request $request)
	{
		// $keyword = $request->input('search');
		// var_dump($keyword); exit;
        $posts = Post::where('status', 'PUBLISHED')->get();
//return Redirect::route('success', ['user' =>  $user, 'newOrder' => $newOrder, 'cust' => $cust]);
//return Redirect::route('searchResult', ['keyword' => $keyword, 'posts' => $posts]);
        //return $posts;
        //return Redirect::route('ssearchResults', [$posts]);
		// return response([
  //       	'posts' => $posts,
  //       	'keyword' => $keyword,
  //       	'redirect' => route('ssearchResults'),


  //       ])->header('Content-Type', "text/html");
        // return [
        // 	'posts' => $posts,
        // 	'keyword' => $keyword,
        // 	'redirect' => route('ssearchResults'),
        // ]; //works
          return [
        	'posts' => $posts,
        	// 'keyword' => $keyword,
        	'redirect' => route('ssearchResults')
        ]; 
       // return redirect()->route('ssearchResults')->with('posts', $posts)->with('keyword', $keyword);

// response = HttpResponse("Text only, please.", mimetype="text/html")
        
        // return view('posts.searchresults', compact('posts'));
	}

	public function ssearchView(Request $request)
	{
		$keyword = $request->input('search');
		// $keyword = $keyword;
        return view('posts.searchresults', compact('keyword'));
	}

}