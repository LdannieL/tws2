<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
Route::post('subscribe',['as'=>'subscribe','uses'=>'MailChimpController@subscribe']);
Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);

// Route::post('/search', 'SearchController@search');
// Route::get('/results/{keyword?}', 'SearchController@searchResults')->name('searchResult');
// Route::get('/searchresults',function(){
//   	$posts = Post::where('status', 'PUBLISHED')->latest()->simplePaginate(2);
//   	return $posts;
// });
Route::get('/ssearch', 'SearchController@ssearchResults');
Route::get('/ssearchres', 'SearchController@ssearchView')->name('ssearchResults');;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'HomeController@index'));

Route::get('pages/{slug}', array('as' => 'page', 'uses' => 'PagesController@show'));
Route::get('post/{slug}', 'PostsController@show')->name('post');

Route::get('/{category_slug?}', array('as' => 'categories', 'uses' => 'PostsController@index'));
// Route::get('post/{id}', 'PostsController@show')->name('post')->where('id', '[1-9][0-9]*');
 
Route::get('comments/{postId}', 'CommentController@index');
Route::post('comments', 'CommentController@store');
Route::post('comments/{commentId}/{type}', 'CommentController@update');


