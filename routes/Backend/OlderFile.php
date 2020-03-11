<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('olderfile' , 'OlderFileController@index')->name('olderfile');
 Route::get('olderfile/create' , 'OlderFileController@create')->name('olderfile.create');
 Route::post('olderfile/store' , 'OlderFileController@store')->name('olderfile.store');
 Route::get('olderfile/{id}/edit' , 'OlderFileController@edit')->name('olderfile.edit');
 Route::get('olderfile/{id}/delete' , 'OlderFileController@delete')->name('olderfile.delete');
 Route::patch('olderfile/{id}' , 'OlderFileController@update')->name('olderfile.update');
 
 
 Route::get('viewbooks' , 'OlderFileController@viewbooks');
 Route::get('viewnews' , 'OlderFileController@viewnews');
 Route::get('viewnotice' , 'OlderFileController@viewnotice');
 Route::get('viewpressrelease' , 'OlderFileController@viewpressrelease');


});


