<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});


Route::get('/lorem-ipsum', function($number = 5) {

	//$number = Input::get('number');

	return View::make('lorem');
});

Route::post('/lorem-ipsum', function() {

	$number = Input::get('paragraphs');

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number); 
	$text = array('number' => $number, 'paragraphs' => $paragraphs);
	return View::make('lorem')
		->with('text', $text);
		
});

Route::get('/user-generator', function() {
	return View::make('random');
});

Route::post('/user-generator', function() {
	
});