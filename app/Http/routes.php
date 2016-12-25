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


Route::get('add-post',['as'=>'get.add.post','uses'=>'PostController@getAddPost']);

Route::post('save-post',['as'=>'post.add.post','uses'=>'PostController@postAddPost']);

Route::get('about',['as'=>'get.about','uses'=>'AboutController@getAboutController']);

Route::get('show-article/{slug}',['as'=>'get.show.article','uses'=>'PostController@getShowPost']);




Route::get('show_article',function(){

    return view('pages.show_article');
});

Route::get('contact',function(){

    return view('pages.contact');
});

Route::get('about',['as'=>'get.about','uses'=>'pages\AboutController@getAbout']);

