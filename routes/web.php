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

/*Route::get('/', function () {
    return view('frontpage.index');
});*/

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::get('/booking', function () {
    return view('booking.index');
});

Route::resource('level','LevelController');
Route::resource('location','LocationController');
Route::resource('roomtype','RoomTypeController');
Route::resource('room','RoomController');
Route::resource('roomstatus','RoomStatusController');
Route::resource('frontpageadm','FrontPageAdmController');
Route::resource('bannerimage','BannerImageController');
Route::resource('documenttype','DocumentTypeController');
Route::resource('country','CountryController');
Route::resource('client','ClientController');
Route::resource('reservationtime','ReservationTimeController');
Route::resource('reservationsource','ReservationSourceController');
Route::resource('reservationstatus','ReservationStatusController');
Route::get('/roomcontrol', function () {
    return view('room.roomcontrol');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontPageController@index')->name('inicio');
