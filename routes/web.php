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
   

    Route::get('/', 'HomeController@index')->name('home.index');
      
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
    Route::get('/homee', function () {
        return view('home.homee');
    })->name('homee');
    Route::get('/index', function () {
        return view('home.index');
    })->name('index');
    Route::get('/agents', function () {
        return view('agents');
    })->name('agents');
    Route::get('/clients', function () {
        return view('clients');
    })->name('clients');
    Route::get('/property1', function () {
        return view('property1');
    })->name('property2');
    Route::get('/property2', function () {
        return view('property2');
    })->name('property1');
    Route::get('/agent', function () {
        return view('agent');
    })->name('agent');
    Route::get('/annonce', function () {
        return view('annonce');
    })->name('annonce');
    Route::get('/danonce', function () {
        return view('danonce');
    })->name('danonce');
    Route::get('/d_buildings', function () {
        return view('d_buildings');
    })->name('d_buildings');
    Route::get('/estimer', function () {
        return view('estimer');
    })->name('estimer');
    Route::get('/sellbuilding', function(){ return view('searchpages.sellbuilding');});
    Route::post('/sellbuilding','BuildingController@store')->name('building.store');
    Route::get('/buildings/{id}', 'BuildingController@show');
    Route::get('/danonce/{id}', 'HouseController@showHouse')->name('house.show');
    Route::get('/danonce/{id}', 'HouseController@showannonce')->name('house.show');
    Route::get('/d_buildings/{id}', 'BuildingController@showbuil')->name('building.show');
    Route::get('/d_buildings/{id}', 'BuildingController@showBuilding')->name('building.show');
    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

       
    });
    Route::get('/Bannonce', function () {
        return view('Bannonce');
    })->name('Bannonce');
    Route::put('/users/update-picture', 'UserController@updatePicture')->name('users.update-picture');

    Route::delete('/users{user}', 'UserController@delete')->name('users.delete');
    // Route::delete('/users/{id}', 'UserController@remove')->name('users.delete');
   
    Route::get('/users', 'UserController@show')->name('users.show');
    Route::put('/users', 'UserController@update')->name('users.update');
    Route::put('/users/password', 'UserController@updatePassword')->name('users.update-password');
    Route::get('/useracess', 'UserController@index')->name('users.acess');
    Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::get('/sell', function(){ return view('searchpages.sell');})->name('searchpages.sell');
    Route::post('/sell','HouseController@store')->name('sell.store');
    Route::get('/buy','HouseController@index')->name('searchpages.buy');
    Route::get('/houses/{id}', 'HouseController@show');
    Route::get('/clients', 'HouseController@showed');  
    Route::get('/Bannonce', 'BuildingController@showed');    
    
    Route::get('/articles', function () {
        return view('articles');
    });
    

    Route::get('/property1', 'HouseController@property1')->name('property1');

    Route::get('/search-rent','HouseController@rentsearch');
    Route::get('/search-buy','HouseController@buysearch');
    Route::get('/clients', 'UserController@showClients');
    Route::post('/houses/{id}/', 'HouseController@Accepter')->name('houses.accept');
    Route::post('/building/{id}/', 'BuildingController@AccepterB')->name('buildings.accept');
    //lands
    Route::get('/sell_land', function(){ return view('searchpages.sell_land');});
    Route::get('/lands/{id}', 'LandController@show');
    Route::post('/sell_land','LandController@store')->name('land.store');
    Route::get('/annonce', 'HouseController@houseslist')->name('houses.list');
    Route::get('/Bannonce', 'BuildingController@buildinglist')->name('building.list');
    Route::delete('/houses/{id}', 'HouseController@destroy')->name('houses.destroy');
    Route::delete('/building/{id}', 'BuildingController@destroy')->name('buildings.destroy');
    Route::get('/index', 'UserController@myControllerMethod');

    
    Route::post('/houses/add-to-favorites', 'HouseController@toggleFavorite')->middleware('auth')->name('add-to-favorites');
    Route::post('/buildings/add-to-favorites', 'BuildingController@toggleFavorite')->middleware('auth')->name('add-building-to-favorites');
    Route::post('/lands/add-land-to-favorites', 'LandController@toggleFavorite')->middleware('auth')->name('add-land-to-favorites');

    //Route::get('/houses/filter', 'HouseController@filter')->name('houses.filter'); //(in progress)
   










    
   
});
