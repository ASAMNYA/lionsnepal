<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('category' , 'CategoryController@index')->name('category');
 Route::get('category/create' , 'CategoryController@create')->name('category.create');
 Route::post('category/store' , 'CategoryController@store')->name('category.store');
 Route::get('category/{id}/edit' , 'CategoryController@edit')->name('category.edit');
 Route::get('category/{id}/delete' , 'CategoryController@delete')->name('category.delete');
 Route::patch('category/{id}' , 'CategoryController@update')->name('category.update');

 Route::get('showblogbycategory/{id}' , 'CategoryController@showblogbycategory');
 

});


