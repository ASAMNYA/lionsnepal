<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */


Route::get('/', 'FrontendController@index')->name('index');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('event-grid-view', 'FrontendController@event_grid_view')->name('event-grid-view');
Route::get('blog-left-sidebar', 'FrontendController@blog_left_sidebar')->name('blog-left-sidebar');
Route::get('blogshow/{id}','FrontendController@show');
Route::get('eventpage/{id}','FrontendController@eventshow');
Route::get('see_all/event','FrontendController@allevent');
Route::get('history', 'FrontendController@history')->name('history');
Route::get('pmjf', 'FrontendController@pmjf')->name('pmjf');
Route::get('mjf', 'FrontendController@mjf')->name('mjf');
Route::get('nlf', 'FrontendController@nlf')->name('nlf');
Route::get('pnlf', 'FrontendController@pnlf')->name('pnlf');
Route::get('lionsmember', 'FrontendController@lionsmember')->name('lionsmember');
Route::get('serve', 'FrontendController@serve')->name('serve');
Route::get('audio', 'FrontendController@audio')->name('audio');
Route::get('video', 'FrontendController@video')->name('video');
Route::get('post/readmore/{id}', 'FrontendController@readmorepost')->name('readmorepost');
Route::get('clubmember/detail/{id}','FrontendController@clubmemberdetail');

//form 
Route::get('form1', function(){
    return view('frontend/humanity.forms.page1');
});
Route::get('form2', function(){
    return view('frontend.humanity.forms.page2');
});
Route::get('form3', function(){
    return view('frontend.humanity.forms.page3');
});
Route::get('form4', function(){
    return view('frontend.humanity.forms.page4');
});
Route::get('form5', function(){
    return view('frontend.humanity.forms.page5');
});
Route::get('form6', function(){
    return view('frontend.humanity.forms.page6_1');
});
Route::get('form7', function(){
    return view('frontend.humanity.forms.form1.page6_2');
});
Route::get('form8', function(){
    return view('frontend.humanity.forms.page7');
});
Route::get('form9', function(){
    return view('frontend.humanity.forms.page8');
});
Route::get('form10', function(){
    return view('frontend.humanity.forms.form1.page10');
});

Route::get('privacy-policy', function(){
    return view('frontend.humanity.privacy_policy');
});

Route::get('showblogbycat/{id}','FrontendController@showblogbycat');
        /*
         * User Dashboard Specific
         */
Route::post('newsletter', 'FrontendController@newsletterstore')->name('newsletter.store');



Route::get('content/other/{id}' , 'FrontendController@individual');


Route::get('contact', 'FrontendController@contact')->name('contact');

Route::get('gallery', 'FrontendController@gallery')->name('gallery');



Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {

Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
