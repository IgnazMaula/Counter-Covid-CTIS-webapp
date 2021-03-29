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


Route::get('/patient/dashboard', 'App\Http\Controllers\PatientController@dashboard')->name('patientDashboard')->middleware('patient');
Route::get('/patient/bookTestSchedule', 'App\Http\Controllers\PatientController@bookTestSchedule')->name('bookTestSchedule')->middleware('patient');
Route::get('/patient/viewTestingHistory', 'App\Http\Controllers\PatientController@viewTestingHistory')->name('viewTestingHistory')->middleware('patient');



Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::get('/tester', 'TesterController@index')->name('tester')->middleware('tester');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');