<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/','LoginController@getLogin');
// Route::post('/','LoginController@postLogin');
// Route::get('/create','SignUpController@getRegister');
// Route::post('/create','SignUpController@postRegister');
Route::get('/das',[
	'as'=>'welcome',
	'uses'=>'user\LoginController@index'
]);
//home page
Route::get('/',function(){
	return view('welcome');
	// return view('form.home');
	// if(Auth::check())
	// 	return'welcomeback' . Auth::user()->username;

	// return 'hi guest' .link_to('auth/facebook','login with facebook');

});

Route::get('auth/facebook','user\LoginController@redirectToProvider');
Route::get('auth/facebook/callback','user\LoginController@handleProviderCallback');


Route::get('/login','LoginController@getLogin');
Route::post('/login','LoginController@postLogin');

Route::get('/create','user\RegisterController@registerForm');
Route::get('/logout','LoginController@logout');

//admin
Route::get('/admin','user\AdminController@index');
Route::get('/admin/create','user\AdminController@insert');
Route::post('admin/create','user\AdminController@store');
Route::get('/admin/edit/{id}',[
			'as'=>'admin.article.edit',
			'uses'=>'user\AdminController@edit'
			]);
Route::put('/admin/edit/{id}','user\AdminController@update');
Route::delete('/admin/edit/{id}','user\AdminController@destroy');

//user
Route::get('/user','user\UserController@index');
//logout
Route::get('/logout','LoginController@getLogout');

Route::get('/view','HomeController@view');

Route::post('/log',[
	'uses'=>'user\LoginController@postLogin',
	'as'=>'user'
	]);
Route::get('/image',function(){
	return view('form.image');
});
Route::post('/imageUpload',[
		'uses'=>'user\LoginController@imageUpload',
		'as'=>'upload'
	]);


//image
Route::get('upload','ApplyController@image');
//Route::post('apply/upload', 'ApplyController@upload');
Route::post('apply/upload', 'ApplyController@multiple_upload');
