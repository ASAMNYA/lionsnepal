<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('family_tree/{id}', 'Backend\Sms\OrgLevelController@family_treeapi'); // specifc orglevelcat family tree

Route::get('family_tree', 'Backend\Sms\OrgLevelController@allfamilytree'); //All family tree

Route::get('family_tree_api', 'Frontend\FrontendController@family_tree_api'); //Show the club names



Route::get('area-cordiantor','Backend\Sms\AreaCordinatorActivityController@areacordinatorapi');

Route::get('blog', 'Backend\Sms\BlogController@blogapi');

Route::get('audioupload', 'Backend\Sms\AudioUploadController@audiouploadapi');

Route::get('club', 'Backend\Sms\ClubController@clubapi');

Route::get('contact', 'Backend\Sms\ContactController@contactapi');

Route::get('contentother', 'Backend\Sms\ContentOtherController@contentotherapi');

Route::get('event', 'Backend\Sms\EventController@eventapi');

Route::get('logo', 'Backend\Sms\LogoController@logoapi');


Route::get('multiplephoto', 'Backend\Sms\MultiplePhotoController@multiplephotoapi');


Route::get('olderfile', 'Backend\Sms\OlderFileController@olderfileapi');

Route::get('lionsbookapi', 'Backend\Sms\OlderFileController@lionsbookapi');
Route::get('lionsnewsapi', 'Backend\Sms\OlderFileController@lionsnewsapi');
Route::get('lionspressreleaseapi', 'Backend\Sms\OlderFileController@lionspressreleaseapi');
Route::get('lionsnoticeapi', 'Backend\Sms\OlderFileController@lionsnoticeapi');


Route::get('slider', 'Backend\Sms\SliderController@sliderapi');

Route::get('team', 'Backend\Sms\TeamController@teamapi');
Route::get('videofront', 'Backend\Sms\VideoFrontController@videofrontapi');


Route::get('videoupload', 'Backend\Sms\VideoUploadController@videouploadapi');


Route::get('mjf', 'Backend\Sms\MjfController@mjfapi');
Route::get('nlf', 'Backend\Sms\NlfController@nlfapi');
Route::get('pmjf', 'Backend\Sms\PmjfController@pmjfapi');
Route::get('pnlf', 'Backend\Sms\PnlfController@pnlfapi');
Route::get('lionshistory', 'Backend\Sms\LionsHistoryController@lionshistoryapi');



