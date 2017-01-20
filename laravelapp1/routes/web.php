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
#delroigtwoerijw
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function()
{
    return view('auth.login');
});

Route::get('/logout', function()
{
    return 'logout usuario';
});

Route::get('/catalog', function()
{
    return view('catalog.index');
});

Route::get('/catalog/show/{id}', function($id)
{
    return view('catalog.show', array('id'=>$id));
});

Route::get('/catalog/create', function()
{
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function($id)
{
    return view('catalog.edit', array('id'=>$id));
});
