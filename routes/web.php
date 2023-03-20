<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/signup', function () {
//     return view('register');
// });
Route::get('/signup', [UserController::class, 'loadSignup']);
Route::post('/signups', [UserController::class, 'Signup']);
Route::get('/signin', function () {
    return view('login');
});
Route::get('/referralregister', [UserController::class, 'loadReferral']);

Route::get('/home', function () {
    return view('index');
});
Route::get('/mail', function () {
    return view('list-mail');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/contact', function () {
    return view('contact');
});