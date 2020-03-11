<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('contentother' , 'ContentOtherController@index')->name('contentother');
 Route::get('contentother/create' , 'ContentOtherController@create')->name('contentother.create');
 Route::post('contentother/store' , 'ContentOtherController@store')->name('contentother.store');
 Route::get('contentother/{id}/edit' , 'ContentOtherController@edit')->name('contentother.edit');
 Route::get('contentother/{id}/delete' , 'ContentOtherController@delete')->name('contentother.delete');
 Route::patch('contentother/{id}' , 'ContentOtherController@update')->name('contentother.update');

});


