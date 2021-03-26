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
    return view('index');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/patientDashboard', 'App\Http\Controllers\PatientController@index')->name('patient')->middleware('patient');
Route::get('/test', 'App\Http\Controllers\PatientController@test')->name('test')->middleware('patient');

Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::get('/tester', 'TesterController@index')->name('tester')->middleware('tester');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');