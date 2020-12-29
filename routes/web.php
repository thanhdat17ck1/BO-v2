<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin_strategies');
});

Route::prefix('strategies')->group(function(){
    Route::get('/',[
        'as' => 'strategies.index',
        'uses' => 'StrategyController@index'
    ]);
    Route::get('/create',[
        'as' => 'strategies.create',
        'uses' => 'StrategyController@create'
    ]);
    Route::post('/store',[
        'as' => 'strategies.store',
        'uses' => 'StrategyController@store'
    ]);
    Route::get('/edit/{id}',[
        'as' => 'strategies.edit',
        'uses' => 'StrategyController@edit'
    ]);
    Route::post('/update/{id}',[
        'as' => 'strategies.update',
        'uses' => 'StrategyController@update'
    ]);
    Route::get('/delete',[
        'as' => 'strategies.delete',
        'uses' => 'StrategyController@destroy'
    ]);
});

Route::prefix('signals')->group(function(){
    Route::get('/',[
        'as' => 'signals.index',
        'uses' => 'SignalController@index'
    ]);
    Route::get('/create',[
        'as' => 'signals.create',
        'uses' => 'SignalController@create'
    ]);
    Route::post('/store',[
        'as' => 'signals.store',
        'uses' => 'SignalController@store'
    ]);
});
