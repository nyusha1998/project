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
})->name('/');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'HomeController@getAllUsers')->name('users');

Route::get('myuser_delete/{id}','HomeController@deleteUser')->name('myuser_delete');

Route::get('myuser2_delete/{id}','HomeController@deleteUser2')->name('myuser2_delete');

Route::get('articles', 'ArticlesController@getAllArticles')->name('articles');

Route::get('lamps', 'LampsController@getAllLamps')->name('lamps');

Route::get('lamp_delete/{id}','LampsController@deleteLamp')->name('lamp_delete');

Route::get('lamp_delete2/{id}','LampsController@deleteLamp2')->name('lamp2_delete');

Route::get('/lamp_add', function () {
    return view('lamp_add');
})->name('lamp_add');

Route::post('lamp_add','LampsController@addLamp')->name('lamp_add');

Route::get('lamp_edit/{id}','LampsController@editLamp')->name('lamp_edit');

Route::post('lamp_edit/{id}','LampsController@updateLamp')->name('lamp_edit');

Route::get('/lamp2_add', function () {
    return view('lamp2_add');
})->name('lamp2_add');

Route::post('lamp2_add','LampsController@addLamp2')->name('lamp2_add');

Route::get('lamp2_edit/{id}','LampsController@editLamp2')->name('lamp2_edit');

Route::post('lamp2_edit/{id}','LampsController@updateLamp2')->name('lamp2_edit');

Route::get('/query', function(){
	return view('query');	
})->name('query');

Route::get('users2', 'HomeController@getAllUsers2')->name('users2');

Route::get('lamps2', 'LampsController@getAllLamps2')->name('lamps2');

Route::get('/child', function(){
	return view('child');	
})->name('child');

Route::get('teachers', 'TeachersController@getAllTeachers')->name('teachers');

Route::get('subjects', 'SubjectsController@getAllSubjects')->name('subjects');

Route::get('auditories', 'AuditoriesController@getAllAuditories')->name('auditories');

Route::get('phones','PhoneController@getAllPhones')->name('phones');

Route::get('phone_delete/{id}','PhoneController@deletePhone')->name('phone_delete');

Route::get('/phone_add', function () {
    return view('phone_add');
})->name('phone_add');

Route::post('phone_create','PhoneController@createPhone')->name('phone_create');

Route::get('phone_edit/{id}','PhoneController@editPhone')->name('phone_edit');

Route::post('phone_update/{id}','PhoneController@updatePhone')->name('phone_update');

Route::get('/project', function(){
	return view('project');	
})->name('project');

Route::get('klients','KlientsController@getAllKlients')->name('klients');

Route::get('klient_delete/{id}','KlientsController@deleteKlient')->name('klient_delete');

Route::get('/klient_add', function () {
    return view('klient_add');
})->name('klient_add');

Route::post('klient_create','KlientsController@createKlient')->name('klient_create');

Route::get('klient_edit/{id}','KlientsController@editKlient')->name('klient_edit');

Route::post('klient_update/{id}','KlientsController@updateKlient')->name('klient_update');

Route::get('orders','OrdersController@getAllOrders')->name('orders');

Route::get('sum','KlientsController@sum')->name('sum');