<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginContainer;

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
});

Route::post("/login", [LoginContainer::class,"index"]);
Route::get("/logout", [LoginContainer::class,"show"]);
