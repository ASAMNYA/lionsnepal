<?php


Route::group([
  
'namespace'  => 'Sms'], function () {

 Route::get('pnlf' , 'PnlfController@index')->name('pnlf');
 Route::get('pnlf/create' , 'PnlfController@create')->name('pnlf.create');
 Route::post('pnlf/store' , 'PnlfController@store')->name('pnlf.store');
 Route::get('pnlf/{id}/edit' , 'PnlfController@edit')->name('pnlf.edit');
 Route::get('pnlf/{id}/delete' , 'PnlfController@delete')->name('pnlf.delete');
 Route::patch('pnlf/{id}' , 'PnlfController@update')->name('pnlf.update');

});




