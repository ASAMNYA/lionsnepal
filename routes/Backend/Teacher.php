<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('showallteacher' , 'TeacherController@showallteachers')->name('showallteacher');

Route::get('teacher' , 'TeacherController@index')->name('teacher');
 Route::get('teacher/create' , 'TeacherController@create')->name('teacher.create');
 Route::post('teacher/store' , 'TeacherController@store')->name('teacher.store');
 Route::get('teacher/{id}/edit' , 'TeacherController@edit')->name('teacher.edit');
 Route::get('teacher/{id}/delete' , 'TeacherController@delete')->name('teacher.delete');
 Route::patch('teacher/{id}' , 'TeacherController@update')->name('teacher.update');




 Route::get('teacher/dashboards' , 'TeacherController@index')->name('teacher.dashboard');

});




