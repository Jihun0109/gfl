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

Route::get('/', function(){
    return redirect(app()->getLocale());
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group([
        'prefix' => '{Locale}', 
        'where' => ['Locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale',
    ], function(){
        // Route::get('/', function () {
        //     return view('welcome');
        // });        
        
        Auth::routes();
        
        Route::get('/', 'HomeController@index')->name('home');

        Route::get('contact', 'ContactController@index')->name('contact');

        Route::get('events', 'EventController@index')->name('events.index');
        Route::get('events/detail/{event_id}', 'EventController@detail')->name('events.detail');

        Route::get('api/events', 'APIController@events');
});
