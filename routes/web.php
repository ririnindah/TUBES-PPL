<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptController;
use App\Http\Controllers\MhsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login1');
});

/*opt*/ 
Route::get('/dashboard_opt',[OptController::class, 'index'])-> name('dashboard_opt');
Route::get('/generate',[OptController::class, 'generate'])-> name('generate');

/*mhs*/
Route::get('/dashboard_mhs',[MhsController::class, 'index'])-> name('dashboard_mhs');
Route::get('/update_mhs',[MhsController::class, 'update_mhs'])-> name('update_mhs');

Route::get('/irs',[MhsController::class, 'irs'])-> name('irs');

