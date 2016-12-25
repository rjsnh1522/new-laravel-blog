<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('article',function(){

    return view('pages.article');
});

Route::get('/',['as'=>'get.index','uses'=>'PageGetterController@getIndex']);

Route::get('articles',['as'=>'get.articles','uses'=>'PageGetterController@getArticles']);





Route::get('show_article',function(){

    return view('pages.show_article');
});

Route::get('contact',function(){

    return view('pages.contact');
});

Route::get('about',['as'=>'get.about','uses'=>'pages\AboutController@getAbout']);

