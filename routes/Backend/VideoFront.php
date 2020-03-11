<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('videofront' , 'VideoFrontController@index')->name('videofront');
 Route::get('videofront/create' , 'VideoFrontController@create')->name('videofront.create');
 Route::post('videofront/store' , 'VideoFrontController@store')->name('videofront.store');
 Route::get('videofront/{id}/edit' , 'VideoFrontController@edit')->name('videofront.edit');
 Route::get('videofront/{id}/delete' , 'VideoFrontController@delete')->name('videofront.delete');
 Route::patch('videofront/{id}' , 'VideoFrontController@update')->name('videofront.update');

});


