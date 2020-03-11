<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('address' , 'AddressController@index')->name('address');
 Route::get('address/create' , 'AddressController@create')->name('address.create');
 Route::post('address/store' , 'AddressController@store')->name('address.store');
 Route::get('address/{id}/edit' , 'AddressController@edit')->name('address.edit');
 Route::get('address/{id}/delete' , 'AddressController@delete')->name('address.delete');
 Route::patch('address/{id}' , 'AddressController@update')->name('address.update');

});


