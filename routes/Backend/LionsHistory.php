<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('lionshistory' , 'LionsHistoryController@index')->name('lionshistory');
 Route::get('lionshistory/create' , 'LionsHistoryController@create')->name('lionshistory.create');
 Route::post('lionshistory/store' , 'LionsHistoryController@store')->name('lionshistory.store');
 Route::get('lionshistory/{id}/edit' , 'LionsHistoryController@edit')->name('lionshistory.edit');
 Route::get('lionshistory/{id}/delete' , 'LionsHistoryController@delete')->name('lionshistory.delete');
 Route::patch('lionshistory/{id}' , 'LionsHistoryController@update')->name('lionshistory.update');

});




