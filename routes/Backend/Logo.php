<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('logo' , 'LogoController@index')->name('logo');
 Route::get('logo/create' , 'LogoController@create')->name('logo.create');
 Route::post('logo/store' , 'LogoController@store')->name('logo.store');
 Route::get('logo/{id}/edit' , 'LogoController@edit')->name('logo.edit');
 Route::get('logo/{id}/delete' , 'LogoController@delete')->name('logo.delete');
 Route::patch('logo/{id}' , 'LogoController@update')->name('logo.update');

});


