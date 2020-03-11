<?php


Route::group(['namespace'  => 'Sms'], function () {

//Activity
 Route::get('areacordinatoractivity' , 'AreaCordinatorActivityController@index')->name('areacordinatoractivity');
 Route::get('areacordinatoractivity/create' , 'AreaCordinatorActivityController@create')->name('areacordinatoractivity.create');
 Route::post('areacordinatoractivity/store' , 'AreaCordinatorActivityController@store')->name('areacordinatoractivity.store');
 Route::get('areacordinatoractivity/{id}/edit' , 'AreaCordinatorActivityController@edit')->name('areacordinatoractivity.edit');
 Route::get('areacordinatoractivity/{id}/delete' , 'AreaCordinatorActivityController@delete')->name('areacordinatoractivity.delete');
 Route::patch('areacordinatoractivity/{id}' , 'AreaCordinatorActivityController@update')->name('areacordinatoractivity.update');


//Region
 Route::get('areacordinatorregion' , 'AreaCordinatorRegionController@index')->name('areacordinatorregion');
 Route::get('areacordinatorregion/create' , 'AreaCordinatorRegionController@create')->name('areacordinatorregion.create');
 Route::post('areacordinatorregion/store' , 'AreaCordinatorRegionController@store')->name('areacordinatorregion.store');
 Route::get('areacordinatorregion/{id}/edit' , 'AreaCordinatorRegionController@edit')->name('areacordinatorregion.edit');
 Route::get('areacordinatorregion/{id}/delete' , 'AreaCordinatorRegionController@delete')->name('areacordinatorregion.delete');
 Route::patch('areacordinatorregion/{id}' , 'AreaCordinatorRegionController@update')->name('areacordinatorregion.update');


});

