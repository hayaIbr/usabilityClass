<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;


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
    return view('layout.mainlayout');
});

Route::view('/demo2', 'demo');
Route::view('/home', 'home');
//Route::view('/start', 'start');
Route::get('/start', 'App\Http\Controllers\ReportController@index');

//Route::post('start/sendAppInfo', [ReportController::class, 'setAppInfo']);
Route::get('setClasses','App\Http\Controllers\ReportController@setClasses');
Route::get('setAppInfo','App\Http\Controllers\ReportController@setAppInfo');
Route::get('setReviews','App\Http\Controllers\ReportController@setReviews');
Route::get('displayReport','App\Http\Controllers\ReportController@AImodel');
