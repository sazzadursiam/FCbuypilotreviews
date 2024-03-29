<?php

use App\Http\Controllers\Frontend\MasterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MasterController::class, 'index'])->name('home');
Route::get('/buy-service/{slug}', [MasterController::class, 'service_buy_now'])->name('service_buy_now');
Route::post('/pay-by-crypto', [MasterController::class, 'cryptoPay'])->name('pay-by-crypto');


Route::get('/callback', [MasterController::class, 'thank_you_page'])->name('thank_you_page');
Route::get('/return', [MasterController::class, 'return_page'])->name('return_page');
Route::get('/mail-sent', [MasterController::class, 'mail_sent'])->name('mail_sent');
