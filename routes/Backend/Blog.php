<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('blog' , 'BlogController@index')->name('blog');
 Route::get('blog/create' , 'BlogController@create')->name('blog.create');
 Route::post('blog/store' , 'BlogController@store')->name('blog.store');
 Route::get('blog/{id}/edit' , 'BlogController@edit')->name('blog.edit');
 Route::get('blog/{id}/delete' , 'BlogController@delete')->name('blog.delete');
 Route::patch('blog/{id}' , 'BlogController@update')->name('blog.update');
Route::get('blog/{id}','BlogController@show');
 

});


