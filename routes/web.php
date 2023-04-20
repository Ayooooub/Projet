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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', function () {   return view('home.home');});
    
    Route::get('/index', 'HomeController@index')->name('home.index');
    
    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });
    Route::get('/home', function () {
        return view('home.home');
    })->name('home');
    
    
    
    Route::get('/estimer', function () {
        return view('estimer');
    })->name('estimer');
   


    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

       
    });
    Route::put('/users/update-picture', 'UserController@updatePicture')->name('users.update-picture');

    Route::delete('/users{user}', 'UserController@delete')->name('users.delete');
    Route::get('/users', 'UserController@show')->name('users.show');
    Route::put('/users', 'UserController@update')->name('users.update');
    Route::put('/users/password', 'UserController@updatePassword')->name('users.update-password');
    Route::get('/useracess', 'UserController@index')->name('users.acess');
    Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
   
   
    Route::get('/sell', function(){ return view('searchpages.sell');})->name('searchpages.sell');
    Route::post('/sell','HouseController@store')->name('sell.store');

    Route::get('/sellbuilding', function(){ return view('searchpages.sellbuilding');});
    Route::post('/sellbuilding','BuildingController@store')->name('building.store');

    Route::get('/sell_land', function(){ return view('searchpages.sell_land');});
    Route::post('/sell_land','LandController@store')->name('land.store');

    Route::get('/buy','HouseController@index')->name('searchpages.buy');
    Route::get('/houses/{id}', 'HouseController@show');
    Route::get('/buildings/{id}', 'BuildingController@show');

    Route::get('/lands/{id}', 'LandController@show');

    //Searchpages functions
    Route::get('/search-rent','SearchController@rentsearch');
    Route::get('/search-buy','SearchController@buysearch');

    //Favoris
 
    Route::post('/houses/add-to-favorites', 'HouseController@toggleFavorite')->middleware('auth')->name('add-to-favorites');
    Route::post('/buildings/add-to-favorites', 'BuildingController@toggleFavorite')->middleware('auth')->name('add-building-to-favorites');
    Route::post('/lands/add-land-to-favorites', 'LandController@toggleFavorite')->middleware('auth')->name('add-land-to-favorites');

    //Route::get('/houses/filter', 'HouseController@filter')->name('houses.filter'); //(in progress)

   
    
});