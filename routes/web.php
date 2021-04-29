<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ExplainController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\MenuSelectController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\ProguramuController;
use App\Http\Controllers\ClientSelectController;
use App\Http\Controllers\ClientController;
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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/calender',[CalenderController::class, 'index']);
Route::get('/menu',[MenuController::class, 'index']);
Route::get('/menuselect',[MenuSelectController::class, 'index']);
Route::get('/regist',[ResistController::class, 'index']);
Route::post('/admincalender',[CalenderController::class, 'regist']);
Route::get('/adminindex',[AdminIndexController::class, 'index']);
Route::get('/exp',[ExplainController::class, 'index']);
Route::get('/proguramu',[ProguramuController::class, 'index']);
Route::get('/clientselect',[ClientSelectController::class, 'index']);
Route::get('/client',[ClientController::class, 'index']);

require __DIR__.'/auth.php';
