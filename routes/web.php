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
Route::get('/roomcontrol', function () {
    return view('room.roomcontrol');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
