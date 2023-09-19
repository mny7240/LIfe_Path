<?php
URL::forceScheme('https');

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\MyIntroductionController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;

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
    return view('welcome');
});*/

Route::get('/',[CalendarController::class,'login']);
Route::resource('/calendars',App\Http\Controllers\CalendarController::class);
Route::put('/calendars/{schedule}/updateByCalendar', [App\Http\Controllers\CalendarController::class,'updateByCalendar'])->name('schedules.updateByCalendar');


Route::get('/mypage',[MypageController::class,'index']);
Route::get('/calendar', [CalendarController::class,'calendar']);
Route::post('/store', [CalendarController::class,'store']);
Route::get('/calendar/edit',[MypageController::class,'edit']);
Route::get('/calendardiary',[CalendarDiaryController::class, 'index']);
Route::get('/calendarplace',[CalendarPlaceController::class, 'index']);
Route::get('/calendartask',[CalendarTaskController::class,'index']);
Route::get('/calendarthing',[CalendarThingController::class,'index']);
Route::get('/diary',[DiaryController::class,'index']);
Route::get('/calendar/{calendar}',[DiaryController::class, 'show']);
Route::post('/calendar',[DiaryController::class,'store']);
Route::get('/place',[PlaceController::class,'index']);
Route::get('/task',[TaskController::class,'index']);
Route::get('/thing',[ThingController::class,'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
