<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('class' , 'ClassController@index')->name('class');
 Route::get('class/create' , 'ClassController@create')->name('class.create');
 Route::post('class/store' , 'ClassController@store')->name('class.store');
 Route::get('class/{id}/edit' , 'ClassController@edit')->name('class.edit');
 Route::get('class/{id}/delete' , 'ClassController@delete')->name('class.delete');
 Route::patch('class/{id}' , 'ClassController@update')->name('class.update');

});




