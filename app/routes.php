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

<<<<<<< Updated upstream
Route::get('/', function()
{
    return View::make('hello');
});

Route::get('/test', function()
{
    return "tests";
});
=======
Route::get('/login', 'HomeController@index');
>>>>>>> Stashed changes
