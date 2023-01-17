<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlackController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/create', function () {
    return view('create');
});
Route::post('/registered', [RegisteredUserController::class, 'store']);

Route::get('/slack-test', [SlackController::class, 'test']);
Route::post('/slack-send', [SlackController::class, 'send']);

Route::middleware(['auth'])->group(function(){
    Route::get('/event-test', [EventController::class, 'test']);
    Route::post('/event-send', [EventController::class, 'send']);

    Route::get('/pusher-test', [PusherController::class, 'test']);

    Route::get('/dashboard', [RecordController::class, 'record']);
    Route::get('/quiz', [QuizController::class, 'quiz']);
});

