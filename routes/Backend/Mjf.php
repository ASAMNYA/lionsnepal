<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('mjf' , 'MjfController@index')->name('mjf');
 Route::get('mjf/create' , 'MjfController@create')->name('mjf.create');
 Route::post('mjf/store' , 'MjfController@store')->name('mjf.store');
 Route::get('mjf/{id}/edit' , 'MjfController@edit')->name('mjf.edit');
 Route::get('mjf/{id}/delete' , 'MjfController@delete')->name('mjf.delete');
 Route::patch('mjf/{id}' , 'MjfController@update')->name('mjf.update');

});




