<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lol','CustomerController@Debug');

Route::get('/customer' , 'CustomerController@index');

Route::get('/about' , function() {
  return view('about',[
    'articles' => App\Article::latest()->get()
  ]);
});

Route::get('articles/{article}' , 'ArticlesController@show');
Route::get('articles' , 'ArticlesController@index');
