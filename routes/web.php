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

Route::get('/patient/dashboard', 'App\Http\Controllers\PatientController@dashboard')->name('patientDashboard')->middleware('patient');
Route::get('/patient/bookTestSchedule', 'App\Http\Controllers\PatientController@bookTestSchedule')->name('bookTestSchedule')->middleware('patient');
Route::get('/patient/viewTestingHistory', 'App\Http\Controllers\PatientController@viewTestingHistory')->name('patientViewTestingHistory')->middleware('patient');

Route::post('/patient/bookTestSchedule', 'App\Http\Controllers\BookTestScheduleController@store')->name('bookTestSchedule')->middleware('patient');

Route::get('/tester/dashboard', 'App\Http\Controllers\TesterController@dashboard')->name('testerDashboard')->middleware('tester');
Route::get('/tester/registerPatient', 'App\Http\Controllers\RegisterPatientController@index')->name('registerPatient')->middleware('tester');
Route::get('/tester/approveTestRequest', 'App\Http\Controllers\TesterController@approveTestRequest')->name('approveTestRequest')->middleware('tester');
Route::get('/tester/updateTestResult', 'App\Http\Controllers\TesterController@updateTestResult')->name('updateTestResult')->middleware('tester');
Route::get('/tester/viewTestingHistory', 'App\Http\Controllers\TesterController@viewTestingHistory')->name('testerViewTestingHistory')->middleware('tester');

Route::post('/tester/registerPatient', 'App\Http\Controllers\RegisterPatientController@store')->name('registerPatient')->middleware('tester');

Route::get('/manager/registerTestCenter', 'App\Http\Controllers\ManagerController@registerTestCenter')->name('registerTestCenter')->middleware('manager');
Route::get('/manager/dashboard', 'App\Http\Controllers\ManagerController@dashboard')->name('managerDashboard')->middleware('manager');
Route::get('/manager/registerTester', 'App\Http\Controllers\ManagerController@registerTester')->name('registerTester')->middleware('manager');
Route::get('/manager/viewTesters', 'App\Http\Controllers\ManagerController@viewTesters')->name('viewTesters')->middleware('manager');
Route::get('/manager/manageTestKit', 'App\Http\Controllers\ManagerController@manageTestKit')->name('manageTestKit')->middleware('manager');
Route::get('/manager/viewTestingHistory', 'App\Http\Controllers\ManagerController@viewTestingHistory')->name('managerViewTestingHistory')->middleware('manager');
Route::get('/manager/assignTestCenter', 'App\Http\Controllers\ManagerController@assignTestCenter')->name('assignTestCenter')->middleware('manager');
Route::get('/manager/assignTestCenter', 'App\Http\Controllers\ManagerController@assignTestCenter')->name('assignTestCenter')->middleware('manager');

Route::post('/manager/registerTestCenter', 'App\Http\Controllers\RegisterTestCenterController@store')->name('registerTestCenter')->middleware('manager');
Route::post('/manager/registerTester', 'App\Http\Controllers\RegisterTesterController@store')->name('registerTester')->middleware('manager');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');