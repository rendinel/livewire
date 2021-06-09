<?php
use App\Http\Livewire\Contact;
use App\Http\Livewire\Product;
use App\Http\Livewire\Action;
use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
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
});

// Rotta component
Route::get('/post',Post::class);

// Rotta User
Route::get('/users',User::class);

// Rotta home
Route::get('/home/{name?}',Home::class);

// Rotta Form
Route::get('/form',Form::Class);

// Rotta Action
Route::get('/action',Action::class);

// Rotta product
Route::get('/product',Product::class);

// Rotta contact
Route::get('/contact',Contact::class);

