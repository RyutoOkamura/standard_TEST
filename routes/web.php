<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactSerchController;

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

require __DIR__ . '/auth.php';

// contactページのルーティング
Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/process', [ContactController::class, 'process']);
Route::get('/complete', [ContactController::class, 'complete'])->name('complete');
Route::get('/customer', [ContactController::class, 'customer']);

//serchページのルーティング
Route::get('/serch', [ContactSerchController::class, 'serch']);
Route::post('/serch', [ContactSerchController::class, 'result']);
