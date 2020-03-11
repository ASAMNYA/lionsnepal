<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('subject' , 'SubjectController@index')->name('subject');
 Route::get('subject/create' , 'SubjectController@create')->name('subject.create');
 Route::post('subject/store' , 'SubjectController@store')->name('subject.store');
 Route::get('subject/{id}/edit' , 'SubjectController@edit')->name('subject.edit');
 Route::get('subject/{id}/delete' , 'SubjectController@delete')->name('subject.delete');
 Route::patch('subject/{id}' , 'SubjectController@update')->name('subject.update');

});




