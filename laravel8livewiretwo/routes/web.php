<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Users;
use App\Http\Livewire\Students;
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

Route::get('/all-users',Users::class);

Route::get('/students',Students::class);