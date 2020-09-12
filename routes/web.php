<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// login
Route::get('/loginreg', function () {
    return view('loginreg');
})->name('start');
Route::post('loginreg/registration', 'LoginregController@registration')->name('registration_insert');
Route::post('loginreg/login', 'LoginregController@login')->name('login');
Route::get('loginreg/logout', 'LoginregController@logout')->name('logout');
//sesion
Route::get('setsession/{data?}','LoginregController@setsession')->name('setsession');
Route::get('getsession','LoginregController@getsession')->name('getsession');
// forgot pass
Route::get('forgotpass_view', 'OtpsystemController@forgotpass_view')->name('forgotpass_view');
Route::post('emailverification', 'OtpsystemController@emailverification')->name('emailverification');
Route::get('userverification/{id?}', 'OtpsystemController@userverification')->name('userverification');
Route::post('sendotp', 'OtpsystemController@sendotp')->name('sendotp');
Route::get('newpass/{id?}', 'OtpsystemController@newpass')->name('newpass');
Route::post('checkotp', 'OtpsystemController@checkotp')->name('checkotp');
Route::post('setpass', 'OtpsystemController@setpass')->name('setpass');

// home

Route::get('home', 'NewsfeedController@homeload')->name('home');


Route::post('setcs', 'LoginregController@setcs')->name('setcs');

// profile pages

Route::post('/profile/ref_post/{id}', 'PostController@profile_ref_post')->name('profile_ref_post');
Route::post('profile/searchfriend', 'NewsfeedController@searchfriend')->name('searchfriend');




Route::post('home/load_more/{lastid?}', 'PostController@load_more_home')->name('load_more_home');
Route::post('home/ref_post', 'PostController@ref_post')->name('ref_post');
Route::post('/profile/ref_post/{id}', 'PostController@profile_ref_post')->name('profile_ref_post');

Route::post('profile/load_more/{lastid?}', 'PostController@load_more_profile')->name('load_more_profile');



Route::post('home/post_text', 'PostController@post_text')->name('post_text');
Route::post('home/post_photo', 'PostController@post_photo')->name('post_photo');
Route::post('home/post_video', 'PostController@post_video')->name('post_video');

Route::post('post_delete/{id}', 'PostController@post_delete')->name('post_delete');







Route::post('/postlike/{id}','PostController@postlike')->name('postlike');
Route::any('/addcomment/{id}','PostController@addcomment')->name('addcomment');
Route::any('/comm_delete/{id}','PostController@comm_delete')->name('comm_delete');




Route::any('/view_post/{id}','PostController@view_post')->name('view_post');
Route::any('/view_comm/{id}','PostController@view_comm')->name('view_comm');
Route::post('/comm_count/{id}','PostController@comm_count')->name('comm_count');

Route::post('/comm_like/{id}','PostController@comm_like')->name('comm_like');
Route::get('/comm_like/{id}','PostController@comm_like')->name('comm_like');




route::get('time_ago/{time?}','NewsfeedController@time_ago_in_php');



//temp 
Route::get('imageCrop', 'ProfileController@imageCrop')->name('imageCrop');

Route::post('image-crop', 'ProfileController@imageCropPost')->name('croppie.upload-image');

Route::any('image-cropc', 'ProfileController@imageCropPostc')->name('croppie.upload-imagec');




// profile

Route::get('profile_view/{id?}', 'ProfileController@timeline_view')->name('profile_view');
Route::get('profile/about_view/{id?}', 'ProfileController@about_view')->name('about_view');
Route::get('profile/friends_view/{id?}', 'ProfileController@friends_view')->name('friends_view');
Route::get('profile/photo_view/{id?}', 'ProfileController@photo_view')->name('photo_view');
Route::get('profile/video_view/{id?}', 'ProfileController@video_view')->name('video_view');




Route::get('profile/hobbies_view','HobbiesController@hobbies_view')->name('hobbies_view');
Route::post('profile/profile_hobbies_save','HobbiesController@profile_hobbies_save')->name('profile_hobbies_save');


Route::get('profile/education_view','EducationController@education_view')->name('education_view');
Route::post('profile/profile_education_save','EducationController@profile_education_save')->name('profile_education_save');


Route::get('profile/profile_setting/{userid?}','ProfileSettingController@index')->name('profile_setting');
Route::post('profile/profile_setting_save/{id}','ProfileSettingController@profile_setting_save')->name('profile_setting_save');


Route::get('profile/notification_view', 'ProfileSettingController@notification_view')->name('notification_view');


Route::get('profile/firndrequst_view', 'ProfileSettingController@firndrequst_view')->name('firndrequst_view');

Route::get('profile/chat_view', 'ChatController@chat_view')->name('chat_view');
Route::get('profile/chat_view_open/{id?}', 'ChatController@chat_view_open')->name('chat_view_open');

Route::get('profile/change_pass_view','ProfileSettingController@change_pass_view')->name('change_pass_view');
Route::post('profile/changepassword_save','ProfileSettingController@changepassword_save')->name('changepassword_save');


Route::get('profile/request_view','ProfileSettingController@request_view')->name('request_view');




// friend
Route::post('makefriend/{id?}','FriendController@makefriend')->name('makefriend');
Route::post('acceptreq/{id?}','FriendController@acceptreq')->name('acceptreq');
Route::post('makeunfriend/{id?}','FriendController@makeunfriend')->name('makeunfriend');
Route::post('ref_firend_btn_box/{id?}','FriendController@ref_firend_btn_box')->name('ref_firend_btn_box');



Route::any('noti_ref_chat','NotificationController@noti_ref_chat')->name('noti_ref_chat');
Route::any('noti_ref_requst','NotificationController@noti_ref_requst')->name('noti_ref_requst');
Route::any('noti_normal_requst','NotificationController@noti_normal_requst')->name('noti_normal_requst');


Route::any('openchat/{id?}','ChatController@openchat')->name('openchat');
Route::any('sendchat/{id?}','ChatController@sendchat')->name('sendchat');

Route::any('loadchat/{id?}','ChatController@loadchat')->name('loadchat');


Route::any('testdata','PostController@testdata')->name('testdata');


