<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('contact' , 'ContactController@index')->name('contact');
 Route::get('contact/create' , 'ContactController@create')->name('contact.create');
 Route::post('contact/store' , 'ContactController@store')->name('contact.store');
 Route::get('contact/{id}/edit' , 'ContactController@edit')->name('contact.edit');
 Route::get('contact/{id}/delete' , 'ContactController@delete')->name('contact.delete');
 Route::patch('contact/{id}' , 'ContactController@update')->name('contact.update');

});


