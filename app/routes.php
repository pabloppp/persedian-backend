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
    return View::make('hello');
});

//Access Routes

Route::group(array('prefix' => 'access'), function()
{
    Route::get('/', 'HomeController@index');
    Route::post('login', 'AccessController@doLogin');
    Route::post('register', 'AccessController@doRegister');
});

//Test Routes

Route::get('/test', function()
{
    return "tests";
});

Route::get('glogin', 'AccessController@loginWithGoogle');

Route::get('/access', function()
{
    return View::make('pages/access');
});

Route::get('/barcode', function()
{
    $result = DNS1D::getBarcodeSVG("PRD123456", "C128B",2,100);
    //$result = "<img  src='data:image/png;base64,".DNS1D::getBarcodePNG("Content", "C128B",2,100)."' />";
    return $result;

});