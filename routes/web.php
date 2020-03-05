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

Route::get('/', 'HomeController@root')->name('root');

//Route::get('translations', 'HomeController@translations')->name('trans');

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

        Route::get('startups', 'StartupController@index')->name('solutions.startups');
        Route::get('brands', 'BrandController@index')->name('solutions.brands');
        Route::get('e-commerce', 'EcommerceController@index')->name('solutions.ecommerce');
        Route::get('industrials', 'IndustrialController@index')->name('solutions.industrials');

        Route::get('kornit-intro', 'KornitController@index')->name('kornit.intro');
        Route::get('kornit-dtg', 'KornitController@dtg')->name('kornit.dtg');
        Route::get('kornit-dtf', 'KornitController@dtf')->name('kornit.dtf');
        Route::get('kornit-used-machine', 'KornitController@usedmachine')->name('kornit.usedmachine');
        Route::get('kornit-supplies-accessories', 'KornitController@accessories')->name('kornit.accessories');
        
        Route::get('melco-intro', 'MelcoController@index')->name('melco.intro');
        Route::get('melco-single-head', 'MelcoController@single')->name('melco.single');
        Route::get('melco-multi-head', 'MelcoController@multi')->name('melco.multi');
        Route::get('melco-supplies-accessories', 'MelcoController@accessories')->name('melco.accessories');

        Route::get('product/{product_id}', 'ProductController@detail')->name('product.detail');
        Route::get('inkcups-intro', 'InkcupsController@index')->name('inkcups.intro');
        
        Route::get('api/events/{type}', 'APIController@events');
        Route::get('api/upcoming/{region}', 'APIController@upcoming');

        Route::get('api/test', 'APIController@test');
});
