<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('allstudent' , 'StudentController@showallstudents')->name('allstudent');


 Route::get('student' , 'StudentController@index')->name('student');
 Route::get('student/create' , 'StudentController@create')->name('student.create');
 Route::post('student/store' , 'StudentController@store')->name('student.store');
 Route::get('student/{id}/edit' , 'StudentController@edit')->name('student.edit');
 Route::get('student/{id}/delete' , 'StudentController@delete')->name('student.delete');
 Route::patch('student/{id}' , 'StudentController@update')->name('student.update');

 Route::get('showallstudent' , 'StudentController@showallstudents')->name('showallstudents');


 Route::get('studentcardall' , 'StudentController@studentcardall')->name('studentcardall');
 

 Route::get('student-detail/{id}' , 'StudentController@studentdetail')->name('studentdetail');


});




