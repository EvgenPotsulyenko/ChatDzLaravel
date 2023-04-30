<?php

use App\Http\Controllers\MyController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
////Route::get('/', [MyController::class, 'register']);
//
//Route::get('/log', [MyController::class, 'index']);
//Route::get('/messages', [MyController::class,'messages']);
//Route::get('/send', [MyController::class,'send']);
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(MyController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/messages', 'messages');
    Route::post('/send', 'send');
});
