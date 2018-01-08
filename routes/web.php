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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/forum', [
	'uses' => 'ForumController@index',
	'as'   =>  'forum'

]);

Route::get('discussion/{slug}', [
		'uses' => 'DiscussionController@show',
		'as'  => 'discussion'
	
]);

Route::get('/channel/{slug}', [
	'uses' => 'ForumController@channel',
	'as'   =>  'channel'

]);

Route::get('/channels', [
	'uses' => 'ChannelController@index',
	'as'   =>  'channels'

]);
	
Route::get('{provider}/auth', [
	'uses' => 'SocialController@auth',
	'as'   => 'social.auth'
]);

Route::get('/{provider}/redirect', [
	'uses' => 'SocialController@auth_callback',
	'as'  => 'social.callback'
]);

Route::group(['middleware' => 'auth'], function(){
	
	Route::resource('channels', 'ChannelController');
	
	Route::get('/discussions/create/new', [
		'uses' => 'DiscussionController@create',
		'as'  => 'discussions.create'
	
	]);
	
	Route::post('/discussions/store', [
		'uses' => 'DiscussionController@store',
		'as'  => 'discussions.store'
	
	]);
	
	
	Route::post('/discussions/reply/{id}', [
		'uses' => 'DiscussionController@reply',
		'as'  => 'discussion.reply'
	
	]);
	
	Route::get('/reply/like/{id}', [
		'uses' => 'RepliesController@like',
		'as'  => 'reply.like'
	
	]);
	
	Route::get('/reply/unlike/{id}', [
		'uses' => 'RepliesController@unlike',
		'as'  => 'reply.unlike'
	
	]);
	
	Route::get('/discussion/watch/{id}', [
		'uses' => 'WatcherController@watch',
		'as'  => 'discussion.watch'
	
	]);
	
	Route::get('/discussion/unwatch/{id}', [
		'uses' => 'WatcherController@unwatch',
		'as'  => 'discussion.unwatch'
	
	]);
	
	Route::get('/reply/best/{id}', [
		'uses' => 'RepliesController@best_answer',
		'as'  => 'reply.best.answer'
	
	]);
	
	Route::get('/discussions/edit/{slug}', [
		'uses' => 'DiscussionController@edit',
		'as'  => 'discussion.edit'
	
	]);
	
	Route::post('/discussions/update/{id}', [
		'uses' => 'DiscussionController@update',
		'as'  => 'discussion.update'
	
	]);
	
	Route::get('/reply/edit/{id}', [
		'uses' => 'RepliesController@edit',
		'as'  => 'reply.edit'
	
	]);
	
	Route::post('/reply/update/{id}', [
		'uses' => 'RepliesController@update',
		'as'  => 'reply.update'
	
	]);
});