<?php

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
    // return view('welcome');
    return redirect()->to('https://ism.utcc.ac.th');
});

Route::get('/redirecttoism', function () {
    return view('redirect');
})->name('redirecttoism');

Route::resource('/enquiries', \App\Http\Controllers\EnquiryController::class);
