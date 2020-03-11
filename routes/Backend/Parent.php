<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('parent' , 'ParentController@index')->name('parent');
 Route::get('parent/create' , 'ParentController@create')->name('parent.create');
 Route::post('parent/store' , 'ParentController@store')->name('parent.store');
 Route::get('parent/{id}/edit' , 'ParentController@edit')->name('parent.edit');
 Route::get('parent/{id}/delete' , 'ParentController@delete')->name('parent.delete');
 Route::patch('parent/{id}' , 'ParentController@update')->name('parent.update');

});




