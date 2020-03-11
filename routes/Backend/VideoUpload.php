<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('videoupload' , 'VideoUploadController@index')->name('videoupload');
 Route::get('videoupload/create' , 'VideoUploadController@create')->name('videoupload.create');
 Route::post('videoupload/store' , 'VideoUploadController@store')->name('videoupload.store');
 Route::get('videoupload/{id}/edit' , 'VideoUploadController@edit')->name('videoupload.edit');
 Route::get('videoupload/{id}/delete' , 'VideoUploadController@delete')->name('videoupload.delete');
 Route::patch('videoupload/{id}' , 'VideoUploadController@update')->name('videoupload.update');
 Route::get('video/play/{id}' , 'VideoUploadController@video');



});


