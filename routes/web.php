<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\enginesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('index');
// });
Route::get('/', [enginesController::class, 'start'])->name('/');

Route::post('/', [enginesController::class, 'save'])->name('save');

Route::post('/f', [enginesController::class, 'turn_on'])->name('turn_on');