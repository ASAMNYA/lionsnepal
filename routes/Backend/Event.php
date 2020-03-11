<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('event' , 'EventController@index')->name('event');
 Route::get('event/create' , 'EventController@create')->name('event.create');
 Route::post('event/store' , 'EventController@store')->name('event.store');
 Route::get('event/{id}/edit' , 'EventController@edit')->name('event.edit');
 Route::get('event/{id}/delete' , 'EventController@delete')->name('event.delete');
 Route::patch('event/{id}' , 'EventController@update')->name('event.update');

});


