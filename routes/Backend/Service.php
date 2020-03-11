<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('service' , 'ServiceController@index')->name('service');
 Route::get('service/create' , 'ServiceController@create')->name('service.create');
 Route::post('service/store' , 'ServiceController@store')->name('service.store');
 Route::get('service/{id}/edit' , 'ServiceController@edit')->name('service.edit');
 Route::get('service/{id}/delete' , 'ServiceController@delete')->name('service.delete');
 Route::patch('service/{id}' , 'ServiceController@update')->name('service.update');

});


