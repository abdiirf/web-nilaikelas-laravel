<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NilaiController;

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

route::resource('/siswa', SiswaController::class);
route::resource('/guru', GuruController::class);
route::resource('/mapel', MapelController::class);
route::resource('/nilai', NilaiController::class);


//login
Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::post('/sesi/confirm-logout', [SessionController::class, 'confirmLogout']);
Route::get('sesi/register', [SessionController::class, 'register']);
Route::post('sesi/register', [SessionController::class, 'create']);
