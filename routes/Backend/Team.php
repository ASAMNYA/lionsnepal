<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('team' , 'TeamController@index')->name('team');
 Route::get('team/create' , 'TeamController@create')->name('team.create');
 Route::post('team/store' , 'TeamController@store')->name('team.store');
 Route::get('team/{id}/edit' , 'TeamController@edit')->name('team.edit');
 Route::get('team/{id}/delete' , 'TeamController@delete')->name('team.delete');
 Route::patch('team/{id}' , 'TeamController@update')->name('team.update');

});




