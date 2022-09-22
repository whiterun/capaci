<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('account', [PageController::class, 'account'])->middleware('auth');
Route::get('pricing', [PageController::class, 'pricing']);

Route::get('login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});

Route::post('signin', [AuthController::class, 'signIn']);
Route::post('signup', [AuthController::class, 'signUp']);
Route::get('signout', [AuthController::class, 'signOut']);
