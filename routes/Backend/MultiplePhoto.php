<?php






Route::group([
  
'namespace'  => 'Sms'], function () {

Route::get('formmultiplephotos','MultiplePhotoController@formupload');

Route::post('uploadmultiplephotos','MultiplePhotoController@photoupload');

Route::get('viewmultiplephotos/{id}','MultiplePhotoController@viewphotos');

 Route::get('multiplephotos/{id}/delete' , 'MultiplePhotoController@delete')->name('multiplephotos.delete');


});