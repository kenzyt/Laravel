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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get("users",
    array(
        "as" => "users",
        "uses" => "UsersController@index"
    ));*/

//Connexion

Route::resource("login", "LoginController");
Route::post("connexion",
    array(
        "as" => "connexion",
        "uses" => "LoginController@connexion"
    ));

Route::get("deconnexion",
    array(
        "as" => "deconnexion",
        "uses" => "LoginController@deconnexion"
    ));

Route::get("login",
    array(
        "as" => "login",
        "uses" => "LoginController@index"
    ));

Route::group(['middleware' => array('auth', 'admin')],
    function()
    {
        Route::resource("admin", "Admin\UsersController");
    });

Route::resource("users", "UsersController");
Route::resource("commentaire", "CommentairesController");


