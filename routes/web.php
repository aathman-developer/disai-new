<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| $2y$10$Y4qLfb2DRbDQ0tPHPAetYuwkEg6e5NTDTi9PH.Rns.cRI/mlyNl6i
*/
// Route::get('check_mail','HomeController@check_mail');
if(SITE_MAINTENANCE=='NO')
{
	Route::get('/','HomeController@home_page');
	Route::get('/about','HomeController@about_us');
	Route::get('/trustee','HomeController@trustee');
	Route::get('/mou','HomeController@mou');
	Route::get('/committee','HomeController@committee');
	Route::get('/events','HomeController@events');
	Route::get('/gallery','HomeController@gallery');
	Route::get('/view','HomeController@view');
	Route::get('/contact','HomeController@contact');
	
}
else
{
	Route::get('/','HomeController@comming_soon');
}