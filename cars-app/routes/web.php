<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    $users = User::all();
    return view('welcome')->with('users', $users);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', 'App\Http\Controllers\UserController')->only('create', 'store')->names('users');
Route::get('users/win', 'App\Http\Controllers\UserController@userWin');
Route::get('departamento/{id}/cities', 'App\Http\Controllers\CityController@byDepartamento');
