<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('staff' , 'StaffController@index')->name('staff');
 Route::get('staff/create' , 'StaffController@create')->name('staff.create');
 Route::post('staff/store' , 'StaffController@store')->name('staff.store');
 Route::get('staff/{id}/edit' , 'StaffController@edit')->name('staff.edit');
 Route::get('staff/{id}/delete' , 'StaffController@delete')->name('staff.delete');
 Route::patch('staff/{id}' , 'StaffController@update')->name('staff.update');

});