<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBinController;
use App\Http\Controllers\DeliveryBinController;
use Illuminate\Support\Facades\Route;

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
    return redirect(route('home'));
})->middleware(['auth']);

// login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store')->middleware('guest');

// register
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store')->middleware('guest');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// dashboard
Route::get('/home', [DashboardController::class, 'index'])->name('home')->middleware('auth');
// dashboard - bin
Route::get('/home/bin/count', [DashboardController::class, 'bintotal'])->name('home.bin.total.count')->middleware('auth');
Route::get('/home/bin/instock/count', [DashboardController::class, 'bininstocktotal'])->name('home.bin.instock.count')->middleware('auth');
Route::get('/home/bin/outstock/count', [DashboardController::class, 'binoutstocktotal'])->name('home.bin.out.count')->middleware('auth');
// dashboard - application - count
Route::get('/home/application/count', [DashboardController::class, 'applicationtotal'])->name('home.bin.total.count')->middleware('auth');
Route::get('/home/application/scheme1/count', [DashboardController::class, 'applicationtotalbyscheme1'])->name('home.bin.total.scheme1.count')->middleware('auth');
Route::get('/home/application/scheme2/count', [DashboardController::class, 'applicationtotalbyscheme2'])->name('home.bin.total.scheme2.count')->middleware('auth');
Route::get('/home/application/scheme3/count', [DashboardController::class, 'applicationtotalbyscheme3'])->name('home.bin.total.scheme3.count')->middleware('auth');
Route::get('/home/application/premise1/count', [DashboardController::class, 'applicationtotalbypremise1'])->name('home.bin.total.premise1.count')->middleware('auth');
Route::get('/home/application/premise2/count', [DashboardController::class, 'applicationtotalbypremise2'])->name('home.bin.total.premise2.count')->middleware('auth');
Route::get('/home/application/premise3/count', [DashboardController::class, 'applicationtotalbypremise3'])->name('home.bin.total.premise3.count')->middleware('auth');
Route::get('/home/application/kategori1/count', [DashboardController::class, 'applicationtotalbykategori1'])->name('home.bin.total.kategori1.count')->middleware('auth');
Route::get('/home/application/kategori2/count', [DashboardController::class, 'applicationtotalbykategori2'])->name('home.bin.total.kategori2.count')->middleware('auth');
Route::get('/home/application/kategori3/count', [DashboardController::class, 'applicationtotalbykategori3'])->name('home.bin.total.kategori3.count')->middleware('auth');
Route::get('/home/application/kategori4/count', [DashboardController::class, 'applicationtotalbykategori4'])->name('home.bin.total.kategori4.count')->middleware('auth');
// dashboard - application - created_at
Route::get('/home/application/created_at', [DashboardController::class, 'binTotalCreatedAt'])->name('home.bin.total.created_at')->middleware('auth');
Route::get('/home/application/scheme1/updated_at', [DashboardController::class, 'applicationbyscheme1UpdatedAt'])->name('home.bin.scheme1.updated_at')->middleware('auth');
Route::get('/home/application/scheme2/updated_at', [DashboardController::class, 'applicationbyscheme2UpdatedAt'])->name('home.bin.scheme2.updated_at')->middleware('auth');

// application
Route::get('/application', [ApplicationController::class, 'index'])->name('application')->middleware('auth');

// deliverybin
Route::get('/deliverybin', [DeliveryBinController::class, 'index'])->name('deliverybin');
Route::get('/databin/{id}', [DataBinController::class, 'databin'])->name('databin');
