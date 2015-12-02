<?php

ini_set('display_errors', 1);

Route::get('/', 'PublicController@index');
Route::get('/nieuws/', function(){
    return redirect('/nieuws/pagina-1');
});
Route::get('/nieuws/pagina-{page}', 'PublicController@news')->where('page', '^0*[1-9]\d*$');
Route::get('/nieuws/artikel/{slug}', 'PublicController@article');
Route::get('/oshu', 'PublicController@oshu');
Route::get('/bestuur', 'PublicController@bestuur');
Route::get('/agenda', 'PublicController@agenda');
Route::get('/studieverenigingen/{faculty}/{association}', 'AssociationController@show');
Route::post('image/upload', 'PublicController@upload');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/pages/edit','PagesController@edit');
Route::patch('/admin/pages/{pages}','PagesController@update');
Route::post('admin/upload', 'AdminController@upload');
Route::patch('admin/edit/upload', 'AdminController@upload');

Route::resource('admin/news','NewsController');
Route::resource('admin/faculties','FacultyController');
Route::resource('admin/associations','AssociationController');
Route::resource('admin/board_members','BoardMembersController');
Route::resource('admin/events','EventsController');


