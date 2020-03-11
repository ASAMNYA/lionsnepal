<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('classparent' , 'ClassParentController@index')->name('classparent');
 Route::get('classparent/create' , 'ClassParentController@create')->name('classparent.create');
 Route::post('classparent/store' , 'ClassParentController@store')->name('classparent.store');
 Route::get('classparent/{id}/edit' , 'ClassParentController@edit')->name('classparent.edit');
 Route::get('classparent/{id}/delete' , 'ClassParentController@delete')->name('classparent.delete');
 Route::patch('classparent/{id}' , 'ClassParentController@update')->name('classparent.update');

});




