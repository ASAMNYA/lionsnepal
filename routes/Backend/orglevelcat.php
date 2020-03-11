<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('orglevelcat' , 'OrgLevelCatController@index')->name('orglevelcat');
 Route::get('orglevelcat/create' , 'OrgLevelCatController@create')->name('orglevelcat.create');
 Route::post('orglevelcat/store' , 'OrgLevelCatController@store')->name('orglevelcat.store');
 Route::get('orglevelcat/{id}/edit' , 'OrgLevelCatController@edit')->name('orglevelcat.edit');
 Route::get('orglevelcat/{id}/delete' , 'OrgLevelCatController@delete')->name('orglevelcat.delete');
 Route::patch('orglevelcat/{id}' , 'OrgLevelCatController@update')->name('orglevelcat.update');

});


