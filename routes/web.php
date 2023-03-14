<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
// Home Page Routes 
Route::get('/', function () {
    return view('index');
});

// Signup Page Routes
Route::get('/signup', function () {
    return view('signup');
});

Route::post('/sign-up', [UsersController::class, 'StoreUsersData']);

// Users Login Routes
Route::get('/login', function () {
    return view('login');
});

// Fallback Page Routes
Route::fallback(function(){
    return view('404');
});
