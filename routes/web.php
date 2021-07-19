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
})->name('welcome');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');


Route::get('/manageuser', [App\Http\Controllers\ManageUserController::class, 'index'])->name('manageuser');

Auth::routes();
Route::get('/register', function () {
    return redirect()->back();
})->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
