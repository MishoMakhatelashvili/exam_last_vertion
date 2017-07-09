<?php



Route::get('/', function () {
    return view('admin');
})->middleware('auth');





Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function()
   {
   Route::resource('categories', 'CategoryController',['except'=>['destroy']]);
   Route::resource('news', 'NewsController',['except'=>['destroy']]);

});

 Route::resource('user', 'UserAncontroller',['except'=>['destroy']]);
 Route::resource('cat', 'UserCatcontroller',['except'=>['destroy']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
