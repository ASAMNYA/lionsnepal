<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('audioupload' , 'AudioUploadController@index')->name('audioupload');
 Route::get('audioupload/create' , 'AudioUploadController@create')->name('audioupload.create');
 Route::post('audioupload/store' , 'AudioUploadController@store')->name('audioupload.store');
 Route::get('audioupload/{id}/edit' , 'AudioUploadController@edit')->name('audioupload.edit');
 Route::get('audioupload/{id}/delete' , 'AudioUploadController@delete')->name('audioupload.delete');
 Route::patch('audioupload/{id}' , 'AudioUploadController@update')->name('audioupload.update');
 Route::get('audio/play/{id}' , 'AudioUploadController@audio');

});


