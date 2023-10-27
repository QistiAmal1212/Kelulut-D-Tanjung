<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::get('VirtualNest', 'App\Http\Controllers\SystemController@VirtualNest')->name('VirtualNest');
    Route::get('Transaction', 'App\Http\Controllers\SystemController@Transaction')->name('Transaction');
    Route::get('Expenses', 'App\Http\Controllers\SystemController@Expenses')->name('Expenses');
    Route::get('Invoices', 'App\Http\Controllers\SystemController@Invoices')->name('Invoices');
    Route::get('Receipts', 'App\Http\Controllers\SystemController@Receipts')->name('Receipts');
    Route::get('History', 'App\Http\Controllers\SystemController@History')->name('History');
    Route::get('Sales', 'App\Http\Controllers\SystemController@Sales')->name('Sales');
    Route::get('Financial', 'App\Http\Controllers\SystemController@Financial')->name('Financial');


});

require __DIR__.'/auth.php';
