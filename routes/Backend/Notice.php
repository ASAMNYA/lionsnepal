<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('notice' , 'NoticeController@index')->name('notice');
 Route::get('notice/create' , 'NoticeController@create')->name('notice.create');
 Route::post('notice/store' , 'NoticeController@store')->name('notice.store');
 Route::get('notice/{id}/edit' , 'NoticeController@edit')->name('notice.edit');
 Route::get('notice/{id}/delete' , 'NoticeController@delete')->name('notice.delete');
 Route::patch('notice/{id}' , 'NoticeController@update')->name('notice.update');

});


