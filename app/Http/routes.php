<?php

Route::get('/', function () {
    return redirect('/blog');
});

#Route::get('/blog', 'BlogController@index');
Route::get('/blog', function(){
    return view('welcome');
});

Route::get('/blog/{slug}', 'BlogController@showPost');

