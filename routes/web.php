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



Route::get('/manager/dashboard', 'App\Http\Controllers\ManagerController@dashboard')->name('managerDashboard')->middleware('manager');
Route::get('/manager/registerTester', 'App\Http\Controllers\ManagerController@registerTester')->name('registerTester')->middleware('manager');
Route::get('/manager/viewTesters', 'App\Http\Controllers\ManagerController@viewTesters')->name('viewTesters')->middleware('manager');
Route::get('/manager/manageTestKit', 'App\Http\Controllers\ManagerController@manageTestKit')->name('manageTestKit')->middleware('manager');
Route::get('/manager/viewTestingHistory', 'App\Http\Controllers\ManagerController@viewTestingHistory')->name('viewTestingHistory')->middleware('manager');


Route::get('/tester', 'TesterController@index')->name('tester')->middleware('tester');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');