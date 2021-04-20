<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/soul-ecstasy', [PagesController::class, 'se'])->name('soul-ecstasy');
Route::get('/winner', [PagesController::class, 'winner'])->name('winner');
Route::get('/outro', [PagesController::class, 'outro'])->name('outro');
Route::get('/mc', [PagesController::class, 'mc'])->name('mc');
Route::get('/vibe', [PagesController::class, 'vibe'])->name('vibe');
Route::get('/smg', [PagesController::class, 'smg'])->name('smg');
Route::get('/sippin', [PagesController::class, 'sippin'])->name('sippin');
Route::get('/december', [PagesController::class, 'december'])->name('december');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
