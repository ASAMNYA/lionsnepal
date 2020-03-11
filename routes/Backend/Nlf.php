<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('nlf' , 'NlfController@index')->name('nlf');
 Route::get('nlf/create' , 'NlfController@create')->name('nlf.create');
 Route::post('nlf/store' , 'NlfController@store')->name('nlf.store');
 Route::get('nlf/{id}/edit' , 'NlfController@edit')->name('nlf.edit');
 Route::get('nlf/{id}/delete' , 'NlfController@delete')->name('nlf.delete');
 Route::patch('nlf/{id}' , 'NlfController@update')->name('nlf.update');

});




