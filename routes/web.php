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
    return view('home');
});

Auth::routes();

Route::get('/home', 'PagesController@home')->name('home');
Route::get('about','PagesController@about');
Route::get('contact_us','PagesController@contact_us');
Route::get('hotel','PagesControllexr@hotels');
Route::get('hotel_events','PagesController@events');


Route::get('family_rooms','RoomController@family_rooms');
Route::get('premium_rooms','RoomController@premium_rooms');

Route::resource('users','UserController');
Route::resource('event_categories','EventCategoriesController');
Route::resource('events','EventsController');
Route::resource('facilities','FacilitiesController');
Route::resource('hotels','HotelsController');
Route::resource('reviews','ReviewsController');
Route::view('dashboard','admin/index')->middleware('auth');
Route::get('change_user_role/{user}','UserController@change_role');
Route::get('change_user_status/{user}','UserController@change_status');
Route::post('search_hotel','HotelsController@search_hotel');

Route::get('test',function(){
   $rating = \App\Reviews::first();
   $hotel = \App\Hotels::first();
   $events = \App\Events::latest()->get();
   	
   	foreach( $events as $event)
   	{
   		echo "<p>".$event->images->first()['path'].$event->images->first()['unique_identifier']."</p>";
   	}
   // return $hotel->events->first();

});
