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
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('portfolio-details');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/upload-csv', [App\Http\Controllers\CandidateController::class, 'uploadCSV'])->name('uploadCSV');

Route::post('/get-suggestions', [App\Http\Controllers\CandidateController::class, 'getSuggestions'])->name('getSuggestions');
Route::post('/get-candidate', [App\Http\Controllers\CandidateController::class, 'getCandidate'])->name('getCandidate');
Route::post('/show-candidate', [App\Http\Controllers\CandidateController::class, 'showCandidate'])->name('showCandidate');

