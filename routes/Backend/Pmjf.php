<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('pmjf' , 'PmjfController@index')->name('pmjf');
 Route::get('pmjf/create' , 'PmjfController@create')->name('pmjf.create');
 Route::post('pmjf/store' , 'PmjfController@store')->name('pmjf.store');
 Route::get('pmjf/{id}/edit' , 'PmjfController@edit')->name('pmjf.edit');
 Route::get('pmjf/{id}/delete' , 'PmjfController@delete')->name('pmjf.delete');
 Route::patch('pmjf/{id}' , 'PmjfController@update')->name('pmjf.update');

});




