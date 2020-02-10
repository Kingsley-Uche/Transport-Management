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
   return view('index');
});
//Route::get('/signup','employee@signup');
Route::get('/about/{id}', function ($id) {
   return view('include.about', ['id'=>$id]);
});

// {
   //return view('contact');
//});

	Route::get('/mypaage', function () {
   abort('404','The page is currently being maintained.');
});
Route::get('/contact', 'Employee@contact')->name('contact');
Route::post('/addcontact','Employee@addcontact');
Route::post('/dashboard','Employee@dashboard');
Route::get('/home',function(){
	return view('home');
});