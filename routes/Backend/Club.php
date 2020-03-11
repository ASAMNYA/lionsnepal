<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('club' , 'ClubController@index')->name('club');
 Route::get('club/create' , 'ClubController@create')->name('club.create');
 Route::post('club/store' , 'ClubController@store')->name('club.store');
 Route::get('club/{id}/edit' , 'ClubController@edit')->name('club.edit');
 Route::get('club/{id}/delete' , 'ClubController@delete')->name('club.delete');
 Route::patch('club/{id}' , 'ClubController@update')->name('club.update');

 Route::get('form1' , 'ClubController@form1');
 Route::get('form2' , 'ClubController@form2');
 Route::get('form3' , 'ClubController@form3');
 Route::get('form4' , 'ClubController@form4');
 Route::get('form5' , 'ClubController@form5');
 Route::get('form6' , 'ClubController@form6');
 Route::get('form7' , 'ClubController@form7');
 Route::get('form8' , 'ClubController@form8');
 Route::get('form9' , 'ClubController@form9');
 Route::get('form10' , 'ClubController@form10');

});

