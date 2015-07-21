<?php



Route::get('/', 'PublicController@index');
Route::get('/oshu', 'PublicController@oshu');
Route::get('/bestuur', 'PublicController@bestuur');
Route::get('/agenda', 'PublicController@agenda');
Route::get('/studieverenigingen/fnt/uvis', 'PublicController@uvis');
Route::get('/studieverenigingen/fnt/v-v-s-uranymus', 'PublicController@uranymus');
Route::get('/studieverenigingen/fnt/cabo-bianci', 'PublicController@cabo');
Route::get('/studieverenigingen/fnt/u-t-v', 'PublicController@utv');
Route::get('/studieverenigingen/fnt/sv-ingenium', 'PublicController@ingenium');
Route::get('/studieverenigingen/fg/s-v-paramedus', 'PublicController@paramedus');
Route::get('/studieverenigingen/fg/so2s', 'PublicController@so2s');
Route::get('/studieverenigingen/fcj/sv-lef', 'PublicController@lef');
Route::get('/studieverenigingen/fcj/vox', 'PublicController@vox');
Route::get('/studieverenigingen/fcj/mad', 'PublicController@mad');
Route::get('/studieverenigingen/fmr/codex', 'PublicController@codex');
Route::get('/studieverenigingen/fmr/haerem', 'PublicController@haerem');
Route::get('/studieverenigingen/fmr/vesta', 'PublicController@vesta');
Route::get('/studieverenigingen/fem/forum', 'PublicController@forum');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/admin', 'AdminController@index');

/*Route::get('/admin/news','NewsController@index');
Route::get('/admin/news/create','NewsController@create');
Route::post('/admin/news','NewsController@store');*/
Route::resource('admin/news','NewsController');

Route::post('image/upload', function(){
    $image = Input::file('file');
    $filename = 'oshu'.uniqid('', true).'.'.$image->getClientOriginalExtension();

    $move = Image::make($image->getRealPath())->save('uploads/images/original/'.$filename);
    if($move){
        return Response::json(['filelink'=>'/uploads/images/original/'. $filename]);
    }else{
        return Response::json(['error'=>true]);
    }
});

