<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('orglevel' , 'OrgLevelController@index')->name('orglevel');
 Route::get('orglevel/create' , 'OrgLevelController@create')->name('orglevel.create');
 Route::post('orglevel/store' , 'OrgLevelController@store')->name('orglevel.store');
 Route::get('orglevel/{id}/edit' , 'OrgLevelController@edit')->name('orglevel.edit');
 Route::get('orglevel/{id}/delete' , 'OrgLevelController@delete')->name('orglevel.delete');
 Route::patch('orglevel/{id}' , 'OrgLevelController@update')->name('orglevel.update');

 Route::get('members-by-club/{id}', 'OrgLevelController@getClubMembers')->name('orglevel.get-members');

});


