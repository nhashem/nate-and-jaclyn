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

Route::get('/', function() {
    $today = strtotime("NOW");
    $wedding_date = strtotime("2012-03-31 00:00:00");
    $days = round(abs($wedding_date-$today)/60/60/24);

    $data['days'] = $days;

	return View::make('home', $data);
});

Route::get('/ourstory', function() {
    return View::make('ourstory');
});

Route::get('/photos', function() {
    return View::make('photos');
});

Route::get('/registry', function() {
    return View::make('registry');
});

Route::get('/guestbook', function() {
    return View::make('guestbook');
});

Route::get('/details', function() {
    return View::make('details');
});