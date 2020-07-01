<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/master', function (){
	return view('adminlte.master');
});

Route::get('/', function(){
	return view('items.index');
});

Route::get('/data-tables', function(){
	return view('items.datatables');
});



