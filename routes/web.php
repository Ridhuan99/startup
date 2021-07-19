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

Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('guest');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus')->middleware('guest');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus')->middleware('guest');

Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');


Route::get('/manageuser', [App\Http\Controllers\ManageUserController::class, 'index'])->name('manageuser');

Auth::routes();
Route::get('/register', function () {
    return redirect()->back();
})->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])
->name('profile')
->middleware('auth');

Route::get('/update-profile', [App\Http\Controllers\ProfileController::class, 'PUpdate'])
->name('update-profile');

Route::post('/update-profile/update', [App\Http\Controllers\ProfileController::class, 'update'])
->name('update.user.profile');


Route::resource('profiles', ProfileController::class);
