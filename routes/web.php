<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
    return view('login');
})->middleware('auth');

Route::get('/demands', [PostController::class,'demand'] );
Route::post('/demands', [PostController::class,'storeDemand'] );
Route::get('/demands/{post}/edit', [PostController::class,'editDemand']);
Route::put('/demands/{post}', [PostController::class,'updateDemand']);
Route::delete('/demands/{post}', [PostController::class,'destroyDemand']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
