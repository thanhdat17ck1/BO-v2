<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;


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
    return view('layout');
});



//loginUser
Route::get('/login','UserController@loginUser');
Route::post('/login','UserController@postloginUser');
//signout
//Route::get('/signout', function () {
 //   return view('signout');
//});
//
Route::get('/signout','RegisterController@register');
Route::post('/signout','RegisterController@postRegister');

Route::get('/updated-activity', 'TelegramController@updatedActivity');
//

Route::get('/a', 'TelegramController@sendMessage');
Route::post('/sendmessage', 'TelegramController@storeMessage');
Route::get('/send-photo', 'TelegramController@sendPhoto');
Route::post('/store-photo', 'TelegramController@storePhoto');
//
Route::get('/setwebhook', function () {
	$response = Telegram::setWebhook(['url' => '  https://ceb64f63ad19.ngrok.io']);
	dd($response);
});

Route::get('/webhook', 'TelegramController@webhook');



