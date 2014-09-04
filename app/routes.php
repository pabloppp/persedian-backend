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


//Access Routes

Route::group(array('prefix' => 'access'), function()
{
    Route::get('/', 'HomeController@index');
    Route::post('login', 'AccessController@doLogin');
    Route::get('logout', 'AccessController@doLogout');
    Route::post('register', 'AccessController@doRegister');
    Route::get('google', 'AccessController@loginWithGoogle');
});

//Test Routes

Route::get('test', function()
{
    return "tests";
});

//API Routes
Route::group(array('prefix' => 'api', 'before' => 'auth'), function()
{
    Route::get('/inventories/owned', 'InventoryController@getMine');
    Route::get('/inventories/collaborating', 'InventoryController@getCollaborating');
    Route::get('/inventories/{name}/delete', 'InventoryController@delete');
    Route::post('/inventories', 'InventoryController@add');
});

//Navigation Routes

Route::get('/', function()
{
    if(Auth::guest()) return View::make('pages/access');
    return Redirect::to("i");

});

Route::get('i', function()
{
    return View::make('pages/main_app');
})->before("auth");

Route::get('barcode', function()
{
    $result = DNS1D::getBarcodeSVG("PRD123456", "C128B",2,100);
    //$result = "<img  src='data:image/png;base64,".DNS1D::getBarcodePNG("Content", "C128B",2,100)."' />";
    return $result;

});