<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

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

Route::get('/calendar',[CalendarController::class, 'index']);
Route::get('/calendardiary',[CalendarDiaryController::class, 'index']);
Route::get('/calendarplace',[CalendarPlaceController::class, 'index']);
Route::get('/calendartask',[CalendarTaskController::class,'index']);
Route::get('/calendarthing',[CalendarThingController::class,'index']);
Route::get('/diary',[DiaryController::class,'index']);
Route::get('/place',[PlaceController::class,'index']);
Route::get('/task',[TaskController::class,'index']);
Route::get('/thing',[ThingController::class,'index']);